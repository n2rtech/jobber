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

        $filter_name            = $request->name;

        $filter_email           = $request->email;

        $filter_phone           = $request->phone;

        $filter_status          = $request->status;

        isset($filter_name)     ? $customers->where('name', 'like', '%'.$filter_name.'%') : $customers;

        isset($filter_email)    ? $customers->where('email', $filter_email) : $customers;

        isset($filter_phone)    ? $customers->where('phone', $filter_phone) : $customers;

        isset($filter_status)   ? $customers->where('status', $filter_status) : $customers;

        $customers              = $customers->orderBy('id', 'desc')->paginate(20);

        return view('customers.index', compact('customers', 'filter_name', 'filter_email', 'filter_phone', 'filter_status'));
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
            'phone'                 => 'required',
        ];

        $messages = [
            'name.required'             => "Please enter Customer name.",
            'phone.required'            => "Please enter Customer phone.",
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
        $customer->notes            = 'Date :'. Carbon::now().' Note: '.$request->note;
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
        return view('customers.view', compact('customer'));
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
            'phone'                 => 'required',
        ];

        $messages = [
            'name.required'             => "Please enter Customer name.",
            'phone.required'            => "Please enter Customer phone.",
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
        $customer->notes            = 'Date :'. Carbon::now() .' Note: '. $request->note.'<br/>'.$customer->notes;
        $customer->save();

        // if(isset($request->note)){
        //     $note                   = new CustomerNote();
        //     $note->customer_id      = $customer->id;
        //     $note->user_id          = Auth::user()->id;
        //     $note->note             = $request->note;
        //     $note->save();
        // }

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully!');
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
        $lead->directions       = $customer->directions;
        $lead->save();

        return redirect()->route('sales-leads.index')->with('success', 'Sales Lead added successfully!');
    }
}
