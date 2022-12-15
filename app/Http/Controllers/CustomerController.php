<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerDocument;
use App\Models\CustomerNote;
use App\Models\CustomerPhoto;
use App\Models\EmailTemplate;
use App\Models\Estimate;
use App\Models\Invoice;
use App\Models\Job;
use App\Models\JobForm;
use App\Models\JobFormAnswer;
use App\Models\Lead;
use App\Models\Payment;
use App\Models\SentEmail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $customers              = Customer::query();

        $filter_box_customer    = 'hide';

        $filter_search          = $request->search;

        $filter_name            = $request->name;

        $filter_email           = $request->email;

        $filter_phone           = $request->phone;

        $filter_address         = $request->address;

        $filter_status          = $request->status;

        if(isset($filter_name) || isset($filter_email) || isset($filter_phone) || isset($filter_status) || isset($filter_address) || isset($filter_search)){
            $filter_box_customer = 'show';
        }

        isset($filter_search)   ? $customers->where('name', 'like', '%'.$filter_search.'%')->orWhere('email', 'like', '%'.$filter_search.'%')->orWhere('phone', 'like', '%'.$filter_search.'%')->orWhere('mobile_1', 'like', '%'.$filter_search.'%')->orWhere('mobile_2', 'like', '%'.$filter_search.'%')->orWhere('address_1', 'like', '%'.$filter_search.'%')->orWhere('address_2', 'like', '%'.$filter_search.'%')->orWhere('city', 'like', '%'.$filter_search.'%')->orWhere('county', 'like', '%'.$filter_search.'%') : $customers;

        isset($filter_name)     ? $customers->where('name', 'like', '%'.$filter_name.'%') : $customers;

        isset($filter_email)    ? $customers->where('email', 'like', '%'.$filter_email.'%') : $customers;

        isset($filter_phone)    ? $customers->where('phone', 'like', '%'.$filter_phone.'%')->orWhere('mobile_1', 'like', '%'.$filter_phone.'%')->orWhere('mobile_2', 'like', '%'.$filter_phone.'%') : $customers;

        isset($filter_address)  ? $customers->where('address_1', 'like', '%'.$filter_address.'%')->orWhere('address_2', 'like', '%'.$filter_address.'%')->orWhere('city', 'like', '%'.$filter_address.'%')->orWhere('county', 'like', '%'.$filter_address.'%') : $customers;

        isset($filter_status)   ? $customers->where('status', $filter_status) : $customers;

        $customers              = $customers->orderBy('id', 'desc')->paginate(20);

        return view('customers.index', compact('customers', 'filter_name', 'filter_email', 'filter_phone', 'filter_status', 'filter_address','filter_box_customer', 'filter_search'));
    }


    public function customerSearch(Request $request){

        if(!is_null($request->inp)){

            $exp = explode(" ",$request->inp);
            $word = array_reverse($exp);
            $revName = join(" ",$word);

          $result = Customer::where('name','like','%'.$request->inp.'%')
                    ->orWhere('phone','like','%'.$request->inp.'%')
                    ->orWhere('mobile_1','like','%'.$request->inp.'%')
                    ->orWhere('mobile_2','like','%'.$request->inp.'%')
                    ->orWhere('address_1','like','%'.$request->inp.'%')
                    ->orWhere('address_2','like','%'.$request->inp.'%')
                    ->orWhere('city','like','%'.$request->inp.'%')
                    ->orWhere('country','like','%'.$request->inp.'%')
                    ->orWhere('county','like','%'.$request->inp.'%')
                    ->orWhere('eir_code','like','%'.$request->inp.'%')

                    ->orWhere('name','like','%'.$revName.'%')
                    ->take(200)->get()->toArray();


                    if(!empty($result)){

                        return response([
                            'data'    => $result
                        ], 200);

                    } else {

                        return response([
                            'data'    => 404,
                        ], 200);
                    }
             }



        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'                  => 'required',
            'phone'                 =>  ['sometimes', 'nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/' ,'min:9', 'max:11'],
            'mobile_1'              =>  ['sometimes', 'nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/' ,'min:9', 'max:11'],
            'mobile_2'              =>  ['sometimes', 'nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/' ,'min:9', 'max:11'],
        ];

        $messages = [
            'name.required'             => "Please enter Customer name.",
        ];

        $this->validate($request, $rules, $messages);

        $customer                   = new Customer();
        $customer->name             = $request->name;
        $customer->email            = $request->email;
        $customer->phone            = $request->phone;
        $customer->phone_name       = $request->phone_name;
        $customer->mobile_1         = $request->mobile_1;
        $customer->mobile_1_name    = $request->mobile_1_name;
        $customer->mobile_2         = $request->mobile_2;
        $customer->mobile_2_name    = $request->mobile_2_name;
        $customer->address_1        = $request->address_1;
        $customer->address_2        = $request->address_2;
        $customer->city             = $request->city;
        $customer->type             = $request->has('type') ? $request->type : 'customer';
        $customer->county           = $request->county;
        $customer->country          = 'Ireland';
        $customer->eir_code         = $request->eir_code;
        $customer->directions       = $request->directions;
        $customer->save();

        if(isset($request->note)){
            $note                   = new CustomerNote();
            $note->customer_id      = $customer->id;
            $note->user_id          = Auth::user()->id;
            $note->note             = $request->note;
            $note->save();
        }

        return redirect()->route('customers.show', $customer->id)->with('success', 'Customer updated successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        foreach($customer->photos as $photo){
            $photo->path = asset('storage/uploads/customers/' . $id . '/photos' .'/'. $photo->image);
        }
        foreach($customer->documents as $document){
            $document->path = asset('storage/uploads/customers/' . $id . '/documents' .'/'. $document->document);
        }
        foreach($customer->allnotes as $note){
            $note->path = asset('storage/uploads/customers/' . $id . '/notes' .'/'. $note->file);
        }

        foreach($customer->jobs as $job){
            if(!empty($job->job_forms) && is_array($job->job_forms)){
                $job->forms     = JobForm::whereIn('id', $job->job_forms)->get();
            }else{
                $job->forms     = [];
            }
        }

        $template                   = EmailTemplate::where('type', 'estimates')->where('mode', 'confirmation')->first();
        $template_confirmation      = EmailTemplate::where('type', 'invoices')->where('mode', 'confirmation')->first();
        $template_followup          = EmailTemplate::where('type', 'invoices')->where('mode', 'follow-up')->first();

        return view('customers.view.index', compact('customer', 'template', 'template_confirmation', 'template_followup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name'                  => 'required',
            'phone'                 =>  ['sometimes', 'nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/' ,'min:9', 'max:11'],
            'mobile_1'              =>  ['sometimes', 'nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/' ,'min:9', 'max:11'],
            'mobile_2'              =>  ['sometimes', 'nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/' ,'min:9', 'max:11'],
        ];

        $messages = [
            'name.required'             => "Please enter Customer name.",
        ];

        $this->validate($request, $rules, $messages);

        $customer                   = Customer::find($id);
        $customer->name             = $request->name;
        $customer->email            = $request->email;
        $customer->phone            = $request->phone;
        $customer->phone_name       = $request->phone_name;
        $customer->mobile_1         = $request->mobile_1;
        $customer->mobile_1_name    = $request->mobile_1_name;
        $customer->mobile_2         = $request->mobile_2;
        $customer->mobile_2_name    = $request->mobile_2_name;
        $customer->address_1        = $request->address_1;
        $customer->address_2        = $request->address_2;
        $customer->city             = $request->city;
        $customer->type             = $request->has('type') ? $request->type : 'customer';
        $customer->county           = $request->county;
        $customer->country          = 'Ireland';
        $customer->eir_code         = $request->eir_code;
        $customer->directions       = $request->directions;
        $customer->save();

        if(isset($request->note)){
            $note                   = new CustomerNote();
            $note->customer_id      = $customer->id;
            $note->user_id          = Auth::user()->id;
            $note->note             = $request->note;
            $note->save();
        }

        return redirect()->route('customers.show', $customer->id)->with('success', 'Customer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::where('customer_id', $id)->delete();
        Invoice::where('customer_id', $id)->delete();
        Estimate::where('customer_id', $id)->delete();
        JobFormAnswer::where('customer_id', $id)->delete();
        CustomerNote::where('customer_id', $id)->delete();
        CustomerPhoto::where('customer_id', $id)->delete();
        CustomerDocument::where('customer_id', $id)->delete();
        SentEmail::where('customer_id', $id)->delete();
        Payment::where('customer_id', $id)->delete();
        Customer::find($id)->delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully!');
    }

    public function convertToLead($id){

        $customer = Customer::find($id);

        if($customer->type == 'customer'){
            $customer->type = 'sales-lead';
            $customer->save();
            return redirect()->back()->with('warning', 'Customer added to Sales Lead successfully!');

        }else{
            $customer->type = 'customer';
            $customer->save();
            return redirect()->back()->with('warning', 'Customer removed from Sales Lead successfully!');
        }

    }

    public function allNotes($id){
        $customer = Customer::find($id);
        return view('customers.all-notes', compact('customer'));
    }
    public function deleteJobForm(Request $request){

        $job = Job::where('id', $request->job_id)->first();
        $job_array = $job->job_forms;
        $array = array_splice($job_array, $request->form_id);
        Job::where('id', $request->job_id)->update(['job_forms' => $array]);
        if($request->redirect == 'job'){
            return redirect()->route('jobs.show', ['job' => $job->id, 'activeTab' => 'view-jobform'])->with('success', 'Job Form deleted successfully!');
        }elseif($request->redirect == 'schedule'){
            return redirect()->route('schedules.show', ['schedule' => $job->id, 'activeTab' => 'view-jobform'])->with('success', 'Job Form deleted successfully!');
        }else{
            return redirect()->route('customers.show', ['customer' => $job->customer_id, 'activeTab' => 'customer-documents'])->with('success', 'Job Form deleted successfully!');
        }
    }

    public function copyeir(){

        /*$records = Customer::Where('directions','!=','')
        ->whereRaw('directions <> ""')
        ->whereRaw('length(directions)<10')
        ->get()->toArray();
        $count = 0;
        if(!empty($records)){
        foreach($records as $record){
             
            Customer::where([

                'id'=>$record['id'],
                'directions'=>$record['directions']
               
                ])->update([
                    'eir_code'=>$record['directions']
                ]);
            $count++;

        }

        
    }
    return $count." eircode records updated";
        */
    /*$mob1 = Customer::whereNotNull('mobile_1')->get(['id','mobile_1'])->toArray();
    $count2 = 0;
    foreach($mob1 as $mob){
     $chk = substr((int)$mob['mobile_1'][0],0,1);
     if($chk != 0){
        Customer::where('id',$mob['id'])->update([ 'mobile_1'=>'0'.$mob['mobile_1'] ]); 
        $count2++;
     }

    }
    echo $count2." Mobile 1 updated<br>";

    $mob2 = Customer::whereNotNull('mobile_2')->get(['id','mobile_2'])->toArray();
    $count3 = 0;
    foreach($mob2 as $mobi){
     $chkm = substr((int)$mobi['mobile_2'][0],0,1);
     if($chkm != 0){
        Customer::where('id',$mobi['id'])->update([ 'mobile_2'=>'0'.$mobi['mobile_2'] ]); 
        $count3++;
     }

    }
    echo $count3." Mobile 2 updated";
    */
    
        return "Code commented now";
    }
}
