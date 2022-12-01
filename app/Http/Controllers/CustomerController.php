<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Lead;
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

        isset($filter_search)   ? $customers->where('name', 'like', '%'.$filter_search.'%')->orWhere('email', 'like', '%'.$filter_search.'%')->orWhere('phone', 'like', '%'.$filter_search.'%')->orWhere('mobile_1', 'like', '%'.$filter_search.'%')->orWhere('mobile_2', 'like', '%'.$filter_search.'%')->orWhere('address_1', 'like', '%'.$filter_search.'%')->orWhere('address_2', 'like', '%'.$filter_search.'%')->orWhere('city', 'like', '%'.$filter_search.'%')->orWhere('state', 'like', '%'.$filter_search.'%') : $customers;

        isset($filter_name)     ? $customers->where('name', 'like', '%'.$filter_name.'%') : $customers;

        isset($filter_email)    ? $customers->where('email', 'like', '%'.$filter_email.'%') : $customers;

        isset($filter_phone)    ? $customers->where('phone', 'like', '%'.$filter_phone.'%')->orWhere('mobile_1', 'like', '%'.$filter_phone.'%')->orWhere('mobile_2', 'like', '%'.$filter_phone.'%') : $customers;

        isset($filter_address)  ? $customers->where('address_1', 'like', '%'.$filter_address.'%')->orWhere('address_2', 'like', '%'.$filter_address.'%')->orWhere('city', 'like', '%'.$filter_address.'%')->orWhere('state', 'like', '%'.$filter_address.'%') : $customers;

        isset($filter_status)   ? $customers->where('status', $filter_status) : $customers;

        $customers              = $customers->orderBy('id', 'desc')->paginate(20);

        return view('customers.index', compact('customers', 'filter_name', 'filter_email', 'filter_phone', 'filter_status', 'filter_address','filter_box_customer', 'filter_search'));
    }

    public function customerSearch(Request $request){
      
        if(!is_null($request->inp)){

          $result = Customer::where('name','like','%'.$request->inp.'%')
                    ->orWhere('phone','like','%'.$request->inp.'%')
                    ->orWhere('mobile_1','like','%'.$request->inp.'%')
                    ->orWhere('mobile_2','like','%'.$request->inp.'%')
                    ->get()->toArray();
          
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
        $customer->state            = $request->state;
        $customer->country          = $request->country;
        $customer->eir_code         = $request->eir_code;
        $customer->directions       = $request->directions;
        $customer->notes            = isset($request->note) ? '<table class="table table-sm"><tbody><tr><th style="border-top:none;">Date</th><td style="border-top:none;" class="text-right"><span class="badge bg-warning">'. Carbon::now() .'</span></td><tr/><tr><th style="border-top:none;" width="20%">Note</th><td style="border-top:none;" class="text-right">'.$request->note.'</td><tr/></tbody></table><hr>' : null;
        $customer->save();

        // if(isset($request->note)){
        //     $note                   = new CustomerNote();
        //     $note->customer_id      = $customer->id;
        //     $note->user_id          = Auth::user()->id;
        //     $note->note             = $request->note;
        //     $note->save();
        // }

        return redirect()->route('customers.index')->with('success', 'Customer added successfully!');
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
        return view('customers.view.index', compact('customer'));
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
        $customer->state            = $request->state;
        $customer->country          = $request->country;
        $customer->eir_code         = $request->eir_code;
        $customer->directions       = $request->directions;
        $customer->notes            = isset($request->note) ? '<table class="table table-sm"><tbody><tr><th style="border-top:none;">Date</th><td style="border-top:none;" class="text-right"><span class="badge bg-warning">'. Carbon::now() .'</span></td><tr/><tr><th style="border-top:none;" width="20%">Note</th><td style="border-top:none;" class="text-right">'.$request->note.'</td><tr/></tbody></table><hr>'.$customer->notes : $customer->notes;
        $customer->save();

        // if(isset($request->note)){
        //     $note                   = new CustomerNote();
        //     $note->customer_id      = $customer->id;
        //     $note->user_id          = Auth::user()->id;
        //     $note->note             = $request->note;
        //     $note->save();
        // }

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
        Customer::find($id)->delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully!');
    }

    public function convertToLead($id){

        $customer = Customer::find($id);

        if($customer->status == 'pending'){

            $customer->status = 'converted';
            $customer->save();

            $lead                   = new Lead;
            $lead->name             = $customer->name;
            $lead->email            = $customer->email;
            $lead->phone            = $customer->phone;
            $lead->phone_name       = $customer->phone_name;
            $lead->mobile_1         = $customer->mobile_1;
            $lead->mobile_1_name    = $customer->mobile_1_name;
            $lead->mobile_2         = $customer->mobile_2;
            $lead->mobile_2_name    = $customer->mobile_2_name;
            $lead->address_1        = $customer->address_1;
            $lead->address_2        = $customer->address_2;
            $lead->city             = $customer->city;
            $lead->state            = $customer->state;
            $lead->country          = $customer->country;
            $lead->eir_code         = $customer->eir_code;
            $lead->status           = "converted";
            $lead->directions       = $customer->directions;
            $lead->save();

            return redirect()->route('sales-leads.index')->with('success', 'Sales Lead added successfully!');

        }else{

            return redirect()->back()->with('warning', 'This Customer is already added as Sales Lead!');
        }

    }
}
