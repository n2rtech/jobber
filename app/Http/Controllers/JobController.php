<?php

namespace App\Http\Controllers;

use App\Mail\JobBookingConfirmation;
use App\Mail\JobBookingConfirmationText;
use App\Models\Customer;
use App\Models\EmailTemplate;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Job;
use App\Models\JobForm;
use App\Models\JobFormAnswer;
use App\Models\JobProduct;
use App\Models\JobTitle;
use App\Models\Product;
use App\Models\SentEmail;
use App\Models\Setting;
use App\Models\TextTemplate;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Http;

class JobController extends Controller
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
        $jobs                       = Job::query();

        $filter_box                 = 'hide';

        $filter_name                = $request->name;

        $filter_email               = $request->email;

        $filter_phone               = $request->phone;

        $filter_scheduled           = $request->scheduled;

        $filter_date                = $request->date;

        $filter_job_title           = $request->job_title;

        $filter_address             = $request->address;

        $filter_completed           = $request->status;

        if(isset($filter_name) || isset($filter_email) || isset($filter_address) || isset($filter_phone) || isset($filter_scheduled) || isset($filter_date) || isset($filter_job_title)){
            $filter_box = 'show';
        }

        if (isset($filter_name)) {
            $jobs->whereHas('customer', function ($q) use ($filter_name) {
                $q->where(function ($q) use ($filter_name) {
                    $q->where('name', 'like', '%'.$filter_name.'%');
                });
            });
        }


        if (isset($filter_email)) {
            $jobs->whereHas('customer', function ($q) use ($filter_email) {
                $q->where(function ($q) use ($filter_email) {
                    $q->where('email', 'like', '%'.$filter_email.'%');
                });
            });
        }

        isset($filter_scheduled)    ? $jobs->where('scheduled', $filter_scheduled) : $jobs;

        isset($filter_date)         ? $jobs->where('start', $filter_date) : $jobs;

        if (isset($filter_phone)) {
            $jobs->whereHas('customer', function ($q) use ($filter_phone) {
                $q->where(function ($q) use ($filter_phone) {
                    $q->where('phone', 'like', '%'.$filter_phone.'%')->orWhere('mobile_1', 'like', '%'.$filter_phone.'%')->orWhere('mobile_2', 'like', '%'.$filter_phone.'%');
                });
            });
        }

        if (isset($filter_address)) {
            $jobs->whereHas('customer', function ($q) use ($filter_address) {
                $q->where(function ($q) use ($filter_address) {
                    $q->where('address_1', 'like', '%'.$filter_address.'%')->orWhere('address_2', 'like', '%'.$filter_address.'%')->orWhere('city', 'like', '%'.$filter_address.'%')->orWhere('state', 'like', '%'.$filter_address.'%');
                });
            });
        }

        isset($filter_job_title)    ? $jobs->where('job_title', $filter_job_title) : $jobs;

        isset($filter_completed)    ? $jobs->where('scheduled', 'yes')->where('status', $filter_completed) : $jobs;

        if((isset($filter_scheduled) && $filter_scheduled == 'yes')){
            $jobs                       = $jobs->orderBy('start', 'asc')->whereNot('status', 'completed')->get();
        }else{
            $jobs                       = $jobs->orderBy('id', 'desc')->get();
        }


        return view('jobs.index', compact('jobs', 'filter_box', 'filter_name', 'filter_email', 'filter_phone', 'filter_scheduled', 'filter_date', 'filter_job_title', 'filter_address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(isset($request->customer_id)){
            $job_titles = JobTitle::get();
            $job_forms  = JobForm::get();
            $products   = Product::get();
            $customer   = Customer::find($request->customer_id);
            return view('jobs.convert', compact('job_titles', 'job_forms', 'products', 'customer'));
        }else{
            $job_titles = JobTitle::get();
            $job_forms  = JobForm::get();
            $products   = Product::get();
            return view('jobs.create', compact('job_titles', 'job_forms', 'products'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job                    = new Job();
        $job->customer_id       = $request->customer_id;
        $job->job_title_id      = $request->job_title_id;
        $job->instructions      = $request->instructions;
        $job->invoice_remind    = $request->has('invoice_remind') ? true : false;
        $job->job_forms         = $request->job_forms;
        $job->total             = 0;
        $job->save();

        if(!empty($request->product) && is_array($request->product)){
            foreach($request->product as $key => $value){
                $product                = new JobProduct();
                $product->job_id        = $job->id;
                $product->product_id    = $value['product'];
                $product->description   = $value['description'];
                $product->quantity      = $value['quantity'];
                $product->unit_price    = $value['unit_price'];
                $product->total         = $value['total'];
                $product->save();
            }
        }

        $total =JobProduct::where('job_id', $job->id)->sum('total');
        Job::where('id', $job->id)->update(['total' => $total]);

        $setting    = Setting::where('type', 'invoice')->value('value');

        $invoice                        = new Invoice();
        $invoice->customer_id           = $job->customer_id;
        $invoice->job_id                = $job->id;
        $invoice->user_id               = Auth::user()->id;
        $invoice->same_as_billing_address      = true;
        $invoice->due_date              = $job->created_at->addDays($setting['due_on_receipt']);
        $invoice->invoice_date          = Carbon::parse($job->created_at)->format('Y-m-d');
        $invoice->notes                 = Null;
        $invoice->conditions            = $setting['conditions'];
        $invoice->total                 = 0;
        $invoice->save();

        foreach($job->products as $job_product){
            $selected_product       = Product::where('id',  $job_product->product_id)->first();
            $product                = new InvoiceProduct();
            $product->invoice_id    = $invoice->id;
            $product->product_id    = $job_product->product_id;
            $product->description   = $job_product->description;
            $product->quantity      = $job_product->quantity;
            $product->unit_price    = $job_product->unit_price;
            $product->tax_rate      = $selected_product->tax->rate;
            $product->tax_amount    = $job_product->total * $selected_product->tax->rate / 100;
            $product->total         = $job_product->total;
            $product->save();
        }

        $subtotal = InvoiceProduct::where('invoice_id', $invoice->id)->sum('total');

        $deduct_discount = 0.00;
        $added_tax       = InvoiceProduct::where('invoice_id', $invoice->id)->sum('tax_amount');

        if($invoice->discount_type == 'percentage'){
            $deduct_discount = $subtotal * $job->discount / 100;
        }

        if($invoice->discount_type == 'amount'){
            $deduct_discount = $job->discount;
        }

        $total = ($subtotal + $added_tax - $deduct_discount);
        Invoice::where('id', $invoice->id)->update(['subtotal' => $subtotal, 'total' => $total]);

        // if($request->has('redirect')){
        //     return redirect()->route('schedules.index')->with('success', 'Job added successfully!');
        // }
        return redirect()->route('customers.show', ['customer' => $job->customer_id, 'activeTab' => 'customer-jobs'])->with('success', 'Job added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job                = Job::find($id);
        $products           = Product::get();
        $users              = User::where('role', 'worker')->get(['id', 'name']);

        if(!empty($job->job_forms) && is_array($job->job_forms)){
            $job->forms     = JobForm::whereIn('id', $job->job_forms)->get();
        }else{
            $job->forms     = [];
        }

        foreach($job->customer->allnotes as $note){
            $note->path = asset('storage/uploads/customers/' . $id . '/notes' .'/'. $note->file);
        }
        $template           = EmailTemplate::where('type', 'jobs')->where('mode', 'confirmation')->first();
        $text_template      = TextTemplate::where('type', 'jobs')->where('mode', 'confirmation')->first();
        $setting            = Setting::where('type', 'calendar')->value('value');
        $period = new CarbonPeriod($setting['timing_starts'], '30 minutes', $setting['timing_ends']);
        $slots = [];
        foreach ($period as $item) {
            array_push($slots, $item->format("H:i:s"));
        }
        return view('jobs.view', compact('job', 'users', 'products', 'template','slots', 'text_template'));
    }

    public function saveJobForm(Request $request, $id){
        $job = Job::where('id', $id)->first();
        JobFormAnswer::where('job_id', $id)->where('job_form_id', $request->job_form_id)->delete();
        if(!empty($request->question) && is_array($request->question)){
            foreach($request->question as $key => $value){
                $answer                             = new JobFormAnswer();
                $answer->customer_id                = $job->customer_id;
                $answer->job_id                     = $id;
                $answer->user_id                    = Auth::user()->id;
                $answer->job_form_id                = $request->job_form_id;
                $answer->job_form_question_id       = $key;

                if(is_array($value['answer'])){
                    $answer->answer_options         = $value['answer'];
                }else{
                    $answer->answer                 = $value['answer'];
                }

                $answer->save();
            }
        }
        if($request->redirect == 'job'){
            return redirect()->route('jobs.show', ['job' => $id, 'activeTab' => 'view-jobform'])->with('success', 'Job Form updated successfully!');
        }elseif($request->redirect == 'schedule'){
            return redirect()->route('schedules.show', ['schedule' => $id, 'activeTab' => 'view-jobform'])->with('success', 'Job Form updated successfully!');
        }else{
            return redirect()->route('customers.show', ['customer' => $job->customer_id, 'activeTab' => 'customer-documents'])->with('success', 'Job Form updated successfully!');
        }

    }

    public function downloadJobForm($jobid, $formid){

        $job                = Job::where('id', $jobid)->first();

        if(!empty($job->job_forms) && is_array($job->job_forms)){
            $job->forms     = JobForm::where('id', $formid)->get();
        }else{
            $job->forms     = [];
        }
        $data = ['job' => $job];
        $pdf = Pdf::loadView('jobs.download', $data);
        return $pdf->download('jobform.pdf');
    }

    public function viewJobForm($jobid, $formid){
        $job                = Job::where('id', $jobid)->first();

        if(!empty($job->job_forms) && is_array($job->job_forms)){
            $job->forms     = JobForm::where('id', $formid)->get();
        }else{
            $job->forms     = [];
        }
        return view('jobs.job-form', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job        = Job::find($id);
        $job_titles = JobTitle::get();
        $job_forms  = JobForm::get();
        $products   = Product::get();
        return view('jobs.edit', compact('job_titles', 'job_forms', 'job', 'products'));
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
        $job                    = Job::find($id);
        $job->customer_id       = $request->customer_id;
        $job->job_title_id      = $request->job_title_id;
        $job->instructions      = $request->instructions;
        $job->invoice_remind    = $request->has('invoice_remind') ? true : false;
        $job->job_forms         = $request->job_forms;
        $job->total             = 0;
        $job->save();

        JobProduct::where('job_id', $id)->delete();
        if(!empty($request->product) && is_array($request->product)){
            foreach($request->product as $key => $value){
                $product                = new JobProduct();
                $product->job_id        = $job->id;
                $product->product_id    = $value['product'];
                $product->description   = $value['description'];
                $product->quantity      = $value['quantity'];
                $product->unit_price    = $value['unit_price'];
                $product->total         = $value['total'];
                $product->save();
            }
        }
        $total =JobProduct::where('job_id', $job->id)->sum('total');
        Job::where('id', $job->id)->update(['total' => $total]);

        $setting    = Setting::where('type', 'invoice')->value('value');
        $invoice_id  = Invoice::where('job_id', $id)->value('id');

        $invoice                        = Invoice::find($invoice_id);
        $invoice->customer_id           = $job->customer_id;
        $invoice->job_id                = $job->id;
        $invoice->user_id               = Auth::user()->id;
        $invoice->same_as_billing_address      = true;
        $invoice->due_date              = $job->created_at->addDays($setting['due_on_receipt']);
        $invoice->invoice_date          = Carbon::parse($job->created_at)->format('Y-m-d');
        $invoice->conditions            = $setting['conditions'];
        $invoice->save();

        InvoiceProduct::where('invoice_id', $invoice->id)->delete();

        foreach($job->products as $job_product){
            $selected_product       = Product::where('id',  $job_product->product_id)->first();
            $product                = new InvoiceProduct();
            $product->invoice_id    = $invoice->id;
            $product->product_id    = $job_product->product_id;
            $product->description   = $job_product->description;
            $product->quantity      = $job_product->quantity;
            $product->unit_price    = $job_product->unit_price;
            $product->tax_rate      = $selected_product->tax->rate;
            $product->tax_amount    = $job_product->total * $selected_product->tax->rate / 100;
            $product->total         = $job_product->total;
            $product->save();
        }

        $subtotal = InvoiceProduct::where('invoice_id', $invoice->id)->sum('total');
        $added_tax       = InvoiceProduct::where('invoice_id', $invoice->id)->sum('tax_amount');

        if($invoice->discount_type == 'percentage'){
            $deduct_discount = $subtotal * $job->discount / 100;
        }

        if($invoice->discount_type == 'amount'){
            $deduct_discount = $job->discount;
        }

        $total = ($subtotal + $added_tax - $deduct_discount);
        Invoice::where('id', $invoice->id)->update(['subtotal' => $subtotal, 'total' => $total]);

        return redirect()->route('jobs.show', $id)->with('success', 'Job updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobProduct::where('job_id', $id)->delete();
        Job::find($id)->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully!');
    }

    public function changeStatus(Request $request){
        $job = Job::where('id', $request->job_id)->first();
        Job::where('id', $request->job_id)->update(['status' => $request->status]);
        return response()->json(['success' => 'Job marked '.ucfirst($request->status).' successfully!']);
    }

    public function assignTeam(Request $request){
        if(isset($request->user_id)){
            $user = User::where('id', $request->user_id)->first();
            Job::where('id', $request->job_id)->update(['user_id' => $user->id]);
            return response()->json(['success' => 'Job has been assigned to '.$user->name.' successfully!']);
        }else{
            Job::where('id', $request->job_id)->update(['user_id' => null]);
            return response()->json(['danger' => 'Job has been unassigned successfully!']);
        }

    }

    public function confirmation(Request $request){
        $emails = explode(",",$request->email);
        Job::where('id', $request->job_id)->update(['status' => 'provisional']);
        $job = Job::where('id', $request->job_id)->first();
        if($request->medium == 'email'){
            foreach($emails as $email){
                $send_email_to = str_replace(' ', '', $email);
                Mail::to($send_email_to)->send(new JobBookingConfirmation($job, nl2br($request->message), $request->subject));
            }


            $sent_email              = new SentEmail();
            $sent_email->customer_id = $job->customer->id;
            $sent_email->user_id     = Auth::user()->id;
            $sent_email->medium      = 'email';
            $sent_email->type        = 'jobs';
            $sent_email->mode        = 'confirmation';
            $sent_email->subject     =  $request->subject;
            $sent_email->message     =  nl2br($request->message);
            $sent_email->custom_id   =  $job->id;
            $sent_email->save();

            return response()->json(['success' => 'Booking Confirmation has been sent via Email!']);

        }else{
            // return $request->all();
            $send_text_to = '+91' . $request->mobile_no . '@txtlocal.co.uk';

            Mail::to($send_text_to)->send(new JobBookingConfirmationText($job, nl2br($request->text_message), 'Booking'));
            
            //Http::get('https://api.textlocal.in/send?apikey=NzA2ZTQ1NzEzMDRmNzI2Zjc0NzE1MDYyNzMzNjRkNDY=&numbers='.$request->mobile_no.'&sender=TXTLCL&message='.$request->text_message);
            $sent_email              = new SentEmail();
            $sent_email->customer_id = $job->customer->id;
            $sent_email->user_id     = Auth::user()->id;
            $sent_email->medium      = 'text';
            $sent_email->type        = 'jobs';
            $sent_email->mode        = 'confirmation';
            $sent_email->text        =  nl2br($request->message);
            $sent_email->save();
            return response()->json(['success' => 'Booking Confirmation has been sent via Text!']);
        }

    }

    public function unschedule(Request $request){
        Job::where('id', $request->job_id)->update(['scheduled' => 'no', 'status' => 'pending', 'start' => Null, 'end' => Null]);
        return response()->json(['success' => 'Job has been unscheduled successfully!']);
    }
}
