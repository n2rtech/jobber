<?php

namespace App\Http\Controllers;

use App\Models\Job;
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
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
