<?php

namespace App\Http\Controllers;

use App\Models\CompanyDetail;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Product;
use App\Models\Setting;
use App\Models\TaxRate;
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

        $filter_box                 = 'hide';

        $filter_name                = $request->name;

        $filter_email               = $request->email;

        $filter_phone               = $request->phone;

        $filter_status              = $request->status;

        $filter_date                = $request->date;

        if(isset($filter_name) || isset($filter_email) || isset($filter_phone) || isset($filter_status) || isset($filter_date)){
            $filter_box = 'show';
        }


        if (isset($filter_name)) {
            $invoices->whereHas('customer', function ($q) use ($filter_name) {
                $q->where(function ($q) use ($filter_name) {
                    $q->where('name', 'like', '%'.$filter_name.'%');
                });
            });
        }


        if (isset($filter_email)) {
            $invoices->whereHas('customer', function ($q) use ($filter_email) {
                $q->where(function ($q) use ($filter_email) {
                    $q->where('email', 'like', '%'.$filter_email.'%');
                });
            });
        }

        if (isset($filter_phone)) {
            $invoices->whereHas('customer', function ($q) use ($filter_phone) {
                $q->where(function ($q) use ($filter_phone) {
                    $q->where('phone', 'like', '%'.$filter_phone.'%')->orWhere('mobile_1', 'like', '%'.$filter_phone.'%')->orWhere('mobile_2', 'like', '%'.$filter_phone.'%');
                });
            });
        }

        if (isset($filter_address)) {
            $invoices->whereHas('customer', function ($q) use ($filter_address) {
                $q->where(function ($q) use ($filter_address) {
                    $q->where('address_1', 'like', '%'.$filter_address.'%')->orWhere('address_2', 'like', '%'.$filter_address.'%')->orWhere('city', 'like', '%'.$filter_address.'%')->orWhere('state', 'like', '%'.$filter_address.'%');
                });
            });
        }

        isset($filter_status)       ? $invoices->where('status', $filter_status) : $invoices;

        isset($filter_date)         ? $invoices->where('invoice_date', $filter_date) : $invoices;


        $invoices                   = $invoices->orderBy('id', 'desc')->get();

        return view('invoices.index', compact('invoices', 'filter_name', 'filter_email', 'filter_phone', 'filter_status', 'filter_date', 'filter_box'));
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
            $tax_rates  = TaxRate::get();
            $setting    = Setting::where('type', 'invoice')->value('value');
            return view('invoices.convert', compact('products', 'customer', 'invoice_no','tax_rates', 'setting'));
        }else{
            $products   = Product::get();
            $count      = Invoice::count();
            $invoice_no = $count + 1;
            $tax_rates  = TaxRate::get();
            $setting    = Setting::where('type', 'invoice')->value('value');
            return view('invoices.create', compact('products', 'invoice_no', 'tax_rates', 'setting'));
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

        $invoice                           = new Invoice();
        $invoice->customer_id              = $request->customer_id;
        $invoice->user_id                  = Auth::user()->id;
        $invoice->same_as_billing_address  = $request->has('same_as_billing_address') ? true : false;
        $invoice->shipping_address_1       = isset($request->shipping_address_1) ? $request->shipping_address_1 : null;
        $invoice->shipping_address_2       = isset($request->shipping_address_1) ? $request->shipping_address_1 : null;
        $invoice->shipping_city            = isset($request->shipping_city) ? $request->shipping_city : null;
        $invoice->shipping_state           = isset($request->shipping_state) ? $request->shipping_state : null;
        $invoice->shipping_country         = isset($request->shipping_country) ? $request->shipping_country : null;
        $invoice->shipping_eir_code        = isset($request->shipping_eir_code) ? $request->shipping_eir_code : null;
        $invoice->terms                    = $request->terms;
        $invoice->due_date                 = $request->due_date;
        $invoice->invoice_date             = $request->invoice_date;
        $invoice->discount                 = $request->discount;
        $invoice->discount_type            = $request->discount_type;
        $invoice->tax                      = $request->tax;
        $invoice->tax_type                 = 'amount';
        $invoice->notes                    = $request->notes;
        $invoice->conditions               = $request->conditions;
        $invoice->total                    = $request->invoice_total;
        $invoice->save();

        if(!empty($request->product) && is_array($request->product)){
            foreach($request->product as $key => $value){
                $product                = new InvoiceProduct();
                $product->invoice_id    = $invoice->id;
                $product->product_id    = $value['product'];
                $product->description   = $value['description'];
                $product->quantity      = $value['quantity'];
                $product->unit_price    = $value['unit_price'];
                $product->tax_rate      = $value['tax_rate'];
                $product->tax_amount    = ($value['total'] * $value['tax_rate'] / 100);
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
        $invoice    = Invoice::find($id);
        $tax_rates  = TaxRate::get();
        $products   = Product::get();
        $setting    = Setting::where('type', 'invoice')->value('value');
        $company    = CompanyDetail::first();
        return view('invoices.view', compact('invoice', 'products', 'tax_rates', 'setting', 'company'));
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
        $tax_rates  = TaxRate::get();
        $products   = Product::get();
        $setting    = Setting::where('type', 'invoice')->value('value');
        return view('invoices.edit', compact('invoice', 'products', 'tax_rates', 'setting'));
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
        $invoice                           = Invoice::find($id);
        $invoice->customer_id              = $request->customer_id;
        $invoice->user_id                  = Auth::user()->id;
        $invoice->same_as_billing_address  = $request->has('same_as_billing_address') ? true : false;
        $invoice->shipping_address_1       = isset($request->shipping_address_1) ? $request->shipping_address_1 : null;
        $invoice->shipping_address_2       = isset($request->shipping_address_1) ? $request->shipping_address_1 : null;
        $invoice->shipping_city            = isset($request->shipping_city) ? $request->shipping_city : null;
        $invoice->shipping_state           = isset($request->shipping_state) ? $request->shipping_state : null;
        $invoice->shipping_country         = isset($request->shipping_country) ? $request->shipping_country : null;
        $invoice->shipping_eir_code        = isset($request->shipping_eir_code) ? $request->shipping_eir_code : null;
        $invoice->terms                    = $request->terms;
        $invoice->due_date                 = $request->due_date;
        $invoice->invoice_date             = $request->invoice_date;
        $invoice->discount                 = $request->discount;
        $invoice->discount_type            = $request->discount_type;
        $invoice->tax                      = $request->tax;
        $invoice->tax_type                 = 'amount';
        $invoice->notes                    = $request->notes;
        $invoice->conditions               = $request->conditions;
        $invoice->total                    = $request->invoice_total;
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
                $product->tax_rate      = $value['tax_rate'];
                $product->tax_amount    = ($value['total'] * $value['tax_rate'] / 100);
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
