<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Job;
use App\Models\JobForm;
use App\Models\JobProduct;
use App\Models\JobTitle;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

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

        $filter_name                = $request->name;

        $filter_email               = $request->email;

        $filter_phone               = $request->phone;

        $filter_scheduled           = $request->scheduled;

        $filter_date                = $request->date;

        $filter_job_title           = $request->job_title;

        isset($filter_name)         ? $jobs->where('name', 'like', '%'.$filter_name.'%') : $jobs;

        isset($filter_email)        ? $jobs->where('email', $filter_email) : $jobs;

        isset($filter_phone)        ? $jobs->where('phone', $filter_phone) : $jobs;

        isset($filter_scheduled)    ? $jobs->where('scheduled', $filter_scheduled) : $jobs;

        isset($filter_date)         ? $jobs->where('start', $filter_date) : $jobs;

        isset($filter_job_title)    ? $jobs->where('job_title', $filter_job_title) : $jobs;

        $jobs                       = $jobs->orderBy('id', 'desc')->get();

        return view('jobs.index', compact('jobs', 'filter_name', 'filter_email', 'filter_phone', 'filter_scheduled', 'filter_date', 'filter_job_title'));
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

        foreach($job->jobnotes as $note){
            $note->path = asset('storage/uploads/jobs/' . $id . '/notes' .'/'. $note->file);
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

    public function markAsComplete(Request $request){
        $job = Job::where('id', $request->job_id)->first();
        if($job->status == 'completed'){
            Job::where('id', $request->job_id)->update(['status' => 'pending']);
            return response()->json(['danger' => 'Job marked Incompleted successfully!']);
        }else{
            Job::where('id', $request->job_id)->update(['status' => 'completed']);
            return response()->json(['success' => 'Job marked Completed successfully!']);
        }
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
}
