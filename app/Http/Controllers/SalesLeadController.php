<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class SalesLeadController extends Controller
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
        $customers              = Lead::query();

        $filter_name            = $request->name;

        $filter_email           = $request->email;

        $filter_phone           = $request->phone;

        $filter_date            = $request->date;

        isset($filter_name)     ? $customers->where('name', 'like', '%'.$filter_name.'%') : $customers;

        isset($filter_email)    ? $customers->where('email', $filter_email) : $customers;

        isset($filter_phone)    ? $customers->where('phone', $filter_phone) : $customers;

        isset($filter_date)     ? $customers->whereDate('created_at', $filter_date) : $customers;

        $customers              = $customers->orderBy('id', 'desc')->get();

        return view('sales-lead.index', compact('customers', 'filter_name', 'filter_email', 'filter_phone', 'filter_date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales-lead.create');
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
        return view('sales-lead.edit');
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
