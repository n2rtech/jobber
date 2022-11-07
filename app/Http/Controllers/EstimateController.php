<?php

namespace App\Http\Controllers;

use App\Models\CompanyDetail;
use App\Models\Customer;
use App\Models\Estimate;
use App\Models\EstimateProduct;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Product;
use App\Models\Setting;
use App\Models\TaxRate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstimateController extends Controller
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
        $estimates                   = Estimate::query();

        $filter_box                 = 'hide';

        $filter_name                = $request->name;

        $filter_email               = $request->email;

        $filter_phone               = $request->phone;

        $filter_status              = $request->status;

        $filter_date                = $request->date;

        if(isset($filter_name) || isset($filter_email) || isset($filter_phone) || isset($filter_status) || isset($filter_date)){
            $filter_box = 'show';
        }


        isset($filter_name)         ? $estimates->where('name', 'like', '%'.$filter_name.'%') : $estimates;

        isset($filter_email)        ? $estimates->where('email', $filter_email) : $estimates;

        isset($filter_phone)        ? $estimates->where('phone', $filter_phone) : $estimates;

        isset($filter_status)       ? $estimates->where('status', $filter_status) : $estimates;

        isset($filter_date)         ? $estimates->where('estimate_date', $filter_date) : $estimates;


        $estimates                   = $estimates->orderBy('id', 'desc')->get();

        return view('estimates.index', compact('estimates', 'filter_name', 'filter_email', 'filter_phone', 'filter_status', 'filter_date', 'filter_box'));
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
            $count      = Estimate::count();
            $tax_rates  = TaxRate::get();
            $estimate_no = $count + 1;
            $setting    = Setting::where('type', 'invoice')->value('value');
            return view('estimates.convert', compact('products', 'customer', 'estimate_no', 'tax_rates', 'setting'));
        }else{
            $products   = Product::get();
            $count      = Estimate::count();
            $tax_rates  = TaxRate::get();
            $estimate_no = $count + 1;
            $setting    = Setting::where('type', 'invoice')->value('value');
            return view('estimates.create', compact('products', 'estimate_no', 'tax_rates', 'setting'));
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

        $estimate                        = new Estimate();
        $estimate->customer_id           = $request->customer_id;
        $estimate->user_id               = Auth::user()->id;
        $estimate->shipping_address      = $request->has('same_as_billing_address') ? null : $request->shipping_address;;
        $estimate->terms                 = $request->terms;
        $estimate->expiry_date           = $request->expiry_date;
        $estimate->estimate_date         = $request->estimate_date;
        $estimate->discount              = $request->discount;
        $estimate->discount_type         = $request->discount_type;
        $estimate->tax                   = $request->tax;
        $estimate->tax_type              = $request->tax_type;
        $estimate->notes                 = $request->notes;
        $estimate->conditions            = $request->conditions;
        $estimate->total                 = $request->estimate_total;
        $estimate->save();

        if(!empty($request->product) && is_array($request->product)){
            foreach($request->product as $key => $value){
                $product                = new EstimateProduct();
                $product->estimate_id   = $estimate->id;
                $product->product_id    = $value['product'];
                $product->description   = $value['description'];
                $product->quantity      = $value['quantity'];
                $product->unit_price    = $value['unit_price'];
                $product->tax_rate      = $value['tax_rate'];
                $product->total         = $value['total'];
                $product->save();
            }
        }
        $subtotal =EstimateProduct::where('estimate_id', $estimate->id)->sum('total');
        Estimate::where('id', $estimate->id)->update(['subtotal' => $subtotal]);

        return redirect()->route('estimates.index')->with('success', 'Estimate added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estimate   = Estimate::find($id);
        $products   = Product::get();
        $tax_rates  = TaxRate::get();
        $setting    = Setting::where('type', 'invoice')->value('value');
        $company    = CompanyDetail::first();
        return view('estimates.view', compact('estimate', 'products', 'tax_rates', 'setting', 'company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estimate    = Estimate::find($id);
        $products   = Product::get();
        $tax_rates  = TaxRate::get();
        $setting    = Setting::where('type', 'invoice')->value('value');
        return view('estimates.edit', compact('estimate', 'products', 'tax_rates', 'setting'));
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
        $estimate                        = Estimate::find($id);
        $estimate->customer_id           = $request->customer_id;
        $estimate->user_id               = Auth::user()->id;
        $estimate->shipping_address      = $request->has('same_as_billing_address') ? null : $request->shipping_address;;
        $estimate->terms                 = $request->terms;
        $estimate->expiry_date           = $request->expiry_date;
        $estimate->estimate_date         = $request->estimate_date;
        $estimate->discount              = $request->discount;
        $estimate->discount_type         = $request->discount_type;
        $estimate->tax                   = $request->tax;
        $estimate->tax_type              = $request->tax_type;
        $estimate->notes                 = $request->notes;
        $estimate->conditions            = $request->conditions;
        $estimate->total                 = $request->estimate_total;
        $estimate->save();

        EstimateProduct::where('estimate_id', $id)->delete();
        if(!empty($request->product) && is_array($request->product)){
            foreach($request->product as $key => $value){
                $product                = new EstimateProduct();
                $product->estimate_id   = $estimate->id;
                $product->product_id    = $value['product'];
                $product->description   = $value['description'];
                $product->quantity      = $value['quantity'];
                $product->unit_price    = $value['unit_price'];
                $product->tax_rate      = $value['tax_rate'];
                $product->total         = $value['total'];
                $product->save();
            }
        }
        $subtotal = EstimateProduct::where('estimate_id', $estimate->id)->sum('total');
        Estimate::where('id', $estimate->id)->update(['subtotal' => $subtotal]);

        return redirect()->route('estimates.index')->with('success', 'Estimate updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EstimateProduct::where('estimate_id', $id)->delete();
        Estimate::find($id)->delete();
        return redirect()->route('estimates.index')->with('success', 'Estimate deleted successfully!');
    }

    public function convertToInvoice($id){
        $estimate                       =  Estimate::find($id);

        $setting                        =  Setting::where('type', 'invoice')->value('value');

        $invoice                        = new Invoice();
        $invoice->customer_id           = $estimate->customer_id;
        $invoice->user_id               = Auth::user()->id;
        $invoice->shipping_address      = $estimate->shipping_address;
        $invoice->terms                 = $estimate->terms;
        $invoice->due_date              = Carbon::today()->addDays($setting['due_on_receipt'])->format('Y-m-d');
        $invoice->invoice_date          = Carbon::today()->format('Y-m-d');
        $invoice->discount              = $estimate->discount;
        $invoice->discount_type         = $estimate->discount_type;
        $invoice->tax                   = $estimate->tax;
        $invoice->tax_type              = $estimate->tax_type;
        $invoice->notes                 = $estimate->notes;
        $invoice->conditions            = $setting['conditions'];
        $invoice->total                 = $estimate->total;
        $invoice->save();

        foreach($estimate->products as $estimate_product){
            $selected_product       = Product::where('id',  $estimate_product->product_id)->first();
            $product                = new InvoiceProduct();
            $product->invoice_id    = $invoice->id;
            $product->product_id    = $estimate_product->product_id;
            $product->description   = $estimate_product->description;
            $product->quantity      = $estimate_product->quantity;
            $product->unit_price    = $estimate_product->unit_price;
            $product->tax_rate      = $selected_product->tax->rate;
            $product->total         = ($estimate_product->total + $estimate_product->total * $selected_product->tax->rate / 100);
            $product->save();
        }
        $estimate->invoice_id       = $invoice->id;
        $estimate->status           = 'converted';
        $estimate->save();

        return redirect()->route('invoices.show', $invoice->id)->with('sucess', 'Estimate converted to Invoice Successfully');

    }
}
