<?php

namespace App\Http\Controllers;

use App\Mail\JobBookingConfirmation;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Job;
use App\Models\JobForm;
use App\Models\JobProduct;
use App\Models\JobTitle;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

        if(isset($filter_scheduled) ){
            $jobs                       = $jobs->orderBy('start', 'desc')->get();
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
        $invoice->shipping_address      = getAddress($job->customer_id);
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
            $product->total         = ($job_product->total + $job_product->total * $selected_product->tax->rate / 100);
            $product->save();
        }

        $subtotal = InvoiceProduct::where('invoice_id', $invoice->id)->sum('total');

        $deduct_discount = 0.00;
        $added_tax       = 0.00;

        if($invoice->discount_type == 'percentage'){
            $deduct_discount = $subtotal * $job->discount / 100;
        }

        if($invoice->discount_type == 'amount'){
            $deduct_discount = $job->discount;
        }

        if($invoice->tax_type == 'percentage'){
            $added_tax = $subtotal * $job->tax / 100;
        }

        if($invoice->tax_type == 'amount'){
            $added_tax = $subtotal * $job->tax / 100;
        }
        $total = ($subtotal + $added_tax - $deduct_discount);
        Invoice::where('id', $invoice->id)->update(['subtotal' => $subtotal, 'total' => $total]);

        if($request->has('redirect')){
            return redirect()->route('schedules.index')->with('success', 'Job added successfully!');
        }
        return redirect()->route('jobs.index')->with('success', 'Job added successfully!');

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
        return view('jobs.view', compact('job', 'users', 'products'));
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
        $invoice->shipping_address      = getAddress($job->customer_id);
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
            $product->total         = ($job_product->total + $job_product->total * $selected_product->tax->rate / 100);
            $product->save();
        }

        $subtotal = InvoiceProduct::where('invoice_id', $invoice->id)->sum('total');

        if($invoice->discount_type == 'percentage'){
            $deduct_discount = $subtotal * $job->discount / 100;
        }

        if($invoice->discount_type == 'amount'){
            $deduct_discount = $job->discount;
        }

        if($invoice->tax_type == 'percentage'){
            $added_tax = $subtotal * $job->tax / 100;
        }

        if($invoice->tax_type == 'amount'){
            $added_tax = $subtotal * $job->tax / 100;
        }
        $total = ($subtotal + $added_tax - $deduct_discount);
        Invoice::where('id', $invoice->id)->update(['subtotal' => $subtotal, 'total' => $total]);

        return redirect()->route('jobs.index')->with('success', 'Job updated successfully!');
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
        Job::where('id', $request->job_id)->update(['status' => 'provisional']);
        $job = Job::where('id', $request->job_id)->first();
        if($request->medium == 'email'){
            Mail::to($job->customer->email)->send(new JobBookingConfirmation($job, $request->message, $request->subject));
            return response()->json(['success' => 'Booking Confirmation has been sent via Email!']);
        }else{
            return response()->json(['success' => 'Booking Confirmation has been sent via Text!']);
        }

    }

    public function unschedule(Request $request){
        Job::where('id', $request->job_id)->update(['scheduled' => 'no', 'status' => 'pending', 'start' => Null, 'end' => Null]);
        return response()->json(['success' => 'Job has been unscheduled successfully!']);
    }
}
