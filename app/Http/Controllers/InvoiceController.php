<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
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
        $invoices                   = Invoice::query();

        $filter_name                = $request->name;

        $filter_email               = $request->email;

        $filter_phone               = $request->phone;

        $filter_status              = $request->status;

        $filter_date                = $request->date;


        isset($filter_name)         ? $invoices->where('name', 'like', '%'.$filter_name.'%') : $invoices;

        isset($filter_email)        ? $invoices->where('email', $filter_email) : $invoices;

        isset($filter_phone)        ? $invoices->where('phone', $filter_phone) : $invoices;

        isset($filter_status)       ? $invoices->where('status', $filter_status) : $invoices;

        isset($filter_date)         ? $invoices->where('invoice_date', $filter_date) : $invoices;


        $invoices                   = $invoices->orderBy('id', 'desc')->get();

        return view('invoices.index', compact('invoices', 'filter_name', 'filter_email', 'filter_phone', 'filter_status', 'filter_date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(isset($request->customer_id)){
            $products   = Product::get();
            $customer   = Customer::find($request->customer_id);
            $customer->address ='';
            if(isset($customer->address_1) && strlen($customer->address_1) > 0){
                $customer->address .= $customer->address_1;
            }

            if(isset($customer->address_2) && strlen($customer->address_2) > 0){
                $customer->address .= ', '.$customer->address_2;
            }

            if(isset($customer->city) && strlen($customer->city) > 0){
                $customer->address .= ', '.$customer->city;
            }

            if(isset($customer->state) && strlen($customer->state) > 0){
                $customer->address .= ', '.$customer->state;
            }

            if(isset($customer->country) && strlen($customer->country) > 0){
                $customer->address .= ', '.$customer->country;
            }

            if(isset($customer->eir_code) && strlen($customer->eir_code) > 0){
                $customer->address .= ', '.$customer->eir_code;
            }
            $count      = Invoice::count();
            $invoice_no = $count + 1;
            return view('invoices.convert', compact('products', 'customer', 'invoice_no'));
        }else{
            $products   = Product::get();
            $count      = Invoice::count();
            $invoice_no = $count + 1;
            return view('invoices.create', compact('products', 'invoice_no'));
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

        $invoice                        = new Invoice();
        $invoice->customer_id           = $request->customer_id;
        $invoice->user_id               = Auth::user()->id;
        $invoice->shipping_address      = $request->has('same_as_billing_address') ? null : $request->shipping_address;;
        $invoice->terms                 = $request->terms;
        $invoice->due_date              = $request->due_date;
        $invoice->invoice_date          = $request->invoice_date;
        $invoice->discount              = $request->discount;
        $invoice->discount_type         = $request->discount_type;
        $invoice->tax                   = $request->tax;
        $invoice->tax_type              = $request->tax_type;
        $invoice->notes                 = $request->notes;
        $invoice->conditions            = $request->conditions;
        $invoice->total                 = $request->invoice_total;
        $invoice->save();

        if(!empty($request->product) && is_array($request->product)){
            foreach($request->product as $key => $value){
                $product                = new InvoiceProduct();
                $product->invoice_id    = $invoice->id;
                $product->product_id    = $value['product'];
                $product->description   = $value['description'];
                $product->quantity      = $value['quantity'];
                $product->unit_price    = $value['unit_price'];
                $product->total         = $value['total'];
                $product->save();
            }
        }
        $subtotal =InvoiceProduct::where('invoice_id', $invoice->id)->sum('total');
        Invoice::where('id', $invoice->id)->update(['subtotal' => $subtotal]);

        return redirect()->route('invoices.index')->with('success', 'Invoice added successfully!');
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
        $invoice    = Invoice::find($id);
        $invoice->customer->address ='';
        if(isset($invoice->customer->address_1) && strlen($invoice->customer->address_1) > 0){
            $invoice->customer->address .= $invoice->customer->address_1;
        }

        if(isset($invoice->customer->address_2) && strlen($invoice->customer->address_2) > 0){
            $invoice->customer->address .= ', '.$invoice->customer->address_2;
        }

        if(isset($invoice->customer->city) && strlen($invoice->customer->city) > 0){
            $invoice->customer->address .= ', '.$invoice->customer->city;
        }

        if(isset($invoice->customer->state) && strlen($invoice->customer->state) > 0){
            $invoice->customer->address .= ', '.$invoice->customer->state;
        }

        if(isset($invoice->customer->country) && strlen($invoice->customer->country) > 0){
            $invoice->customer->address .= ', '.$invoice->customer->country;
        }

        if(isset($invoice->customer->eir_code) && strlen($invoice->customer->eir_code) > 0){
            $invoice->customer->address .= ', '.$invoice->customer->eir_code;
        }
        $products   = Product::get();
        return view('invoices.edit', compact('invoice', 'products'));
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
        $invoice                        = Invoice::find($id);
        $invoice->customer_id           = $request->customer_id;
        $invoice->user_id               = Auth::user()->id;
        $invoice->shipping_address      = $request->has('same_as_billing_address') ? null : $request->shipping_address;;
        $invoice->terms                 = $request->terms;
        $invoice->due_date              = $request->due_date;
        $invoice->invoice_date          = $request->invoice_date;
        $invoice->discount              = $request->discount;
        $invoice->discount_type         = $request->discount_type;
        $invoice->tax                   = $request->tax;
        $invoice->tax_type              = $request->tax_type;
        $invoice->notes                 = $request->notes;
        $invoice->conditions            = $request->conditions;
        $invoice->total                 = $request->invoice_total;
        $invoice->save();

        InvoiceProduct::where('invoice_id', $id)->delete();
        if(!empty($request->product) && is_array($request->product)){
            foreach($request->product as $key => $value){
                $product                = new InvoiceProduct();
                $product->invoice_id    = $invoice->id;
                $product->product_id    = $value['product'];
                $product->description   = $value['description'];
                $product->quantity      = $value['quantity'];
                $product->unit_price    = $value['unit_price'];
                $product->total         = $value['total'];
                $product->save();
            }
        }
        $subtotal =InvoiceProduct::where('invoice_id', $invoice->id)->sum('total');
        Invoice::where('id', $invoice->id)->update(['subtotal' => $subtotal]);

        return redirect()->route('invoices.index')->with('success', 'Invoice updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        InvoiceProduct::where('invoice_id', $id)->delete();
        Invoice::find($id)->delete();
        return redirect()->route('invoices.index')->with('success', 'Invoice deleted successfully!');
    }
}
