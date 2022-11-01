<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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
        $leads                  = Lead::query();

        $filter_name            = $request->name;

        $filter_email           = $request->email;

        $filter_phone           = $request->phone;

        $filter_date            = $request->date;

        isset($filter_name)     ? $leads->where('name', 'like', '%'.$filter_name.'%') : $leads;

        isset($filter_email)    ? $leads->where('email', $filter_email) : $leads;

        isset($filter_phone)    ? $leads->where('phone', $filter_phone) : $leads;

        isset($filter_date)     ? $leads->whereDate('created_at', $filter_date) : $leads;

        $leads                  = $leads->orderBy('id', 'desc')->get();

        return view('sales-lead.index', compact('leads', 'filter_name', 'filter_email', 'filter_phone', 'filter_date'));
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
        $rules = [
            'name'                  => 'required',
        ];

        $messages = [
            'name.required'             => "Please enter Customer name.",
        ];

        $this->validate($request, $rules, $messages);

        $lead                   = new Lead();
        $lead->name             = $request->name;
        $lead->email            = $request->email;
        $lead->phone            = $request->phone;
        $lead->phone_name       = $request->phone_name;
        $lead->mobile_1         = $request->mobile_1;
        $lead->mobile_1_name    = $request->mobile_1_name;
        $lead->mobile_2         = $request->mobile_2;
        $lead->mobile_2_name    = $request->mobile_2_name;
        $lead->address_1        = $request->address_1;
        $lead->address_2        = $request->address_2;
        $lead->city             = $request->city;
        $lead->state            = $request->state;
        $lead->country          = $request->country;
        $lead->eir_code         = $request->eir_code;
        $lead->directions       = $request->directions;
        $lead->save();

        return redirect()->route('sales-leads.index')->with('success', 'Sales Lead added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lead = Lead::find($id);
        $lead->status = 'converted';
        $lead->save();

        $customer                   = new Customer();
        $customer->name             = $lead->name;
        $customer->email            = $lead->email;
        $customer->phone            = $lead->phone;
        $customer->phone_name       = $lead->phone_name;
        $customer->mobile_1         = $lead->mobile_1;
        $customer->mobile_1_name    = $lead->mobile_1_name;
        $customer->mobile_2         = $lead->mobile_2;
        $customer->mobile_2_name    = $lead->mobile_2_name;
        $customer->address_1        = $lead->address_1;
        $customer->address_2        = $lead->address_2;
        $customer->city             = $lead->city;
        $customer->state            = $lead->state;
        $customer->country          = $lead->country;
        $customer->eir_code         = $lead->eir_code;
        $customer->directions       = $lead->directions;
        $customer->save();

        return redirect()->route('customers.index')->with('success', 'Customer added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lead = Lead::find($id);
        return view('sales-lead.edit', compact('lead'));
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

        $lead                   = Lead::find($id);
        $lead->name             = $request->name;
        $lead->email            = $request->email;
        $lead->phone            = $request->phone;
        $lead->phone_name       = $request->phone_name;
        $lead->mobile_1         = $request->mobile_1;
        $lead->mobile_1_name    = $request->mobile_1_name;
        $lead->mobile_2         = $request->mobile_2;
        $lead->mobile_2_name    = $request->mobile_2_name;
        $lead->address_1        = $request->address_1;
        $lead->address_2        = $request->address_2;
        $lead->city             = $request->city;
        $lead->state            = $request->state;
        $lead->country          = $request->country;
        $lead->eir_code         = $request->eir_code;
        $lead->directions       = $request->directions;
        $lead->save();

        return redirect()->route('sales-leads.index')->with('success', 'Sales Lead updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lead::find($id)->delete();
        return redirect()->route('sales-leads.index')->with('success', 'Sales Lead deleted successfully!');
    }
}
