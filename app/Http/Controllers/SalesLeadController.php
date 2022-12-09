<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
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
        $leads                  = Customer::query();

        $filter_name            = $request->name;

        $filter_email           = $request->email;

        $filter_phone           = $request->phone;

        $filter_date            = $request->date;

        isset($filter_name)     ? $leads->where('name', 'like', '%'.$filter_name.'%') : $leads;

        isset($filter_email)    ? $leads->where('email', $filter_email) : $leads;

        isset($filter_phone)    ? $leads->where('phone', $filter_phone) : $leads;

        isset($filter_date)     ? $leads->whereDate('created_at', $filter_date) : $leads;

        $leads                  = $leads->where('type', 'sales-lead')->orderBy('id', 'desc')->paginate(20);

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
        $customer->type             = $request->has('type') ? $request->type : 'customer';
        $customer->country          = $request->country;
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

        return redirect()->route('customers.show', $customer->id)->with('success', 'Sales Lead added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id){
        $lead = Customer::find($id);
        return view('sales-lead.view', compact('lead'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lead = Customer::find($id);
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
        $customer->type             = $request->has('type') ? $request->type : 'customer';
        $customer->country          = $request->country;
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

        return redirect()->route('customers.show', $customer->id)->with('success', 'Sales Lead updated successfully!');
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
        return redirect()->route('sales-leads.index')->with('success', 'Sales Lead deleted successfully!');
    }

    public function convertToCustomer($id)
    {
        $customer = Customer::find($id);

        if($customer->type == 'customer'){
            $customer->type = 'sales-lead';
            $customer->save();
            return redirect()->route('customers.index')->with('success', 'Customer converted to Sales Lead added successfully!');

        }else{
            $customer->type = 'customer';
            $customer->save();
            return redirect()->route('sales-leads.index')->with('success', 'Sales Lead converted to successfully!');
        }
    }
}
