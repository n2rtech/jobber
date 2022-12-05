<?php

namespace App\Http\Controllers;

use App\Mail\SendEstimateConfirmation;
use App\Models\CompanyDetail;
use App\Models\Customer;
use App\Models\EmailTemplate;
use App\Models\EmailTemplateContent;
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
use Illuminate\Support\Facades\Mail;

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


        if (isset($filter_name)) {
            $estimates->whereHas('customer', function ($q) use ($filter_name) {
                $q->where(function ($q) use ($filter_name) {
                    $q->where('name', 'like', '%'.$filter_name.'%');
                });
            });
        }


        if (isset($filter_email)) {
            $estimates->whereHas('customer', function ($q) use ($filter_email) {
                $q->where(function ($q) use ($filter_email) {
                    $q->where('email', 'like', '%'.$filter_email.'%');
                });
            });
        }

        if (isset($filter_phone)) {
            $estimates->whereHas('customer', function ($q) use ($filter_phone) {
                $q->where(function ($q) use ($filter_phone) {
                    $q->where('phone', 'like', '%'.$filter_phone.'%')->orWhere('mobile_1', 'like', '%'.$filter_phone.'%')->orWhere('mobile_2', 'like', '%'.$filter_phone.'%');
                });
            });
        }

        if (isset($filter_address)) {
            $estimates->whereHas('customer', function ($q) use ($filter_address) {
                $q->where(function ($q) use ($filter_address) {
                    $q->where('address_1', 'like', '%'.$filter_address.'%')->orWhere('address_2', 'like', '%'.$filter_address.'%')->orWhere('city', 'like', '%'.$filter_address.'%')->orWhere('state', 'like', '%'.$filter_address.'%');
                });
            });
        }

        isset($filter_status)       ? $estimates->where('status', $filter_status) : $estimates;

        isset($filter_date)         ? $estimates->where('estimate_date', $filter_date) : $estimates;

        $estimates                   = $estimates->orderBy('id', 'desc')->get();

        $template                    = EmailTemplate::where('type', 'estimates')->where('mode', 'confirmation')->first();

        return view('estimates.index', compact('template', 'estimates', 'filter_name', 'filter_email', 'filter_phone', 'filter_status', 'filter_date', 'filter_box'));
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
            $customer->address = getAddress($customer->id);
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
         // return $request->all();
        $estimate                           = new Estimate();
        $estimate->customer_id              = $request->customer_id;
        $estimate->user_id                  = Auth::user()->id;
        $estimate->same_as_billing_address  = $request->has('same_as_billing_address') ? true : false;
        $estimate->shipping_address_1       = isset($request->shipping_address_1) ? $request->shipping_address_1 : null;
        $estimate->shipping_address_2       = isset($request->shipping_address_1) ? $request->shipping_address_1 : null;
        $estimate->shipping_city            = isset($request->shipping_city) ? $request->shipping_city : null;
        $estimate->shipping_state           = isset($request->shipping_state) ? $request->shipping_state : null;
        $estimate->shipping_country         = isset($request->shipping_country) ? $request->shipping_country : null;
        $estimate->shipping_eir_code        = isset($request->shipping_eir_code) ? $request->shipping_eir_code : null;
        $estimate->terms                    = $request->terms;
        $estimate->expiry_date              = $request->expiry_date;
        $estimate->estimate_date            = $request->estimate_date;
        $estimate->discount                 = $request->discount;
        $estimate->discount_type            = $request->discount_type;
        $estimate->tax                      = $request->tax;
        $estimate->tax_type                 = 'amount';
        $estimate->notes                    = $request->notes;
        $estimate->conditions               = $request->conditions;
        $estimate->total                    = $request->estimate_total;
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
                $product->tax_amount    = ($value['total'] * $value['tax_rate'] / 100);
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
        $estimate                           = Estimate::find($id);
        $estimate->customer_id              = $request->customer_id;
        $estimate->user_id                  = Auth::user()->id;
        $estimate->same_as_billing_address  = $request->has('same_as_billing_address') ? true : false;
        $estimate->shipping_address_1       = isset($request->shipping_address_1) ? $request->shipping_address_1 : null;
        $estimate->shipping_address_2       = isset($request->shipping_address_1) ? $request->shipping_address_1 : null;
        $estimate->shipping_city            = isset($request->shipping_city) ? $request->shipping_city : null;
        $estimate->shipping_state           = isset($request->shipping_state) ? $request->shipping_state : null;
        $estimate->shipping_country         = isset($request->shipping_country) ? $request->shipping_country : null;
        $estimate->shipping_eir_code        = isset($request->shipping_eir_code) ? $request->shipping_eir_code : null;
        $estimate->terms                    = $request->terms;
        $estimate->expiry_date              = $request->expiry_date;
        $estimate->estimate_date            = $request->estimate_date;
        $estimate->discount                 = $request->discount;
        $estimate->discount_type            = $request->discount_type;
        $estimate->tax                      = $request->tax;
        $estimate->tax_type                 = 'amount';
        $estimate->notes                    = $request->notes;
        $estimate->conditions               = $request->conditions;
        $estimate->total                    = $request->estimate_total;
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
                $product->tax_amount    = ($value['total'] * $value['tax_rate'] / 100);
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
        $invoice->same_as_billing_address  = $estimate->same_as_billing_address;
        $invoice->shipping_address_1    = isset($estimate->shipping_address_1) ? $estimate->shipping_address_1 : null;
        $invoice->shipping_address_2    = isset($estimate->shipping_address_1) ? $estimate->shipping_address_1 : null;
        $invoice->shipping_city         = isset($estimate->shipping_city) ? $estimate->shipping_city : null;
        $invoice->shipping_state        = isset($estimate->shipping_state) ? $estimate->shipping_state : null;
        $invoice->shipping_country      = isset($estimate->shipping_country) ? $estimate->shipping_country : null;
        $invoice->shipping_eir_code     = isset($estimate->shipping_eir_code) ? $estimate->shipping_eir_code : null;
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
            $product->tax_amount    = ($estimate_product->total * $selected_product->tax->rate / 100);
            $product->total         =  $estimate_product->total;
            $product->save();
        }
        $estimate->invoice_id       = $invoice->id;
        $estimate->status           = 'converted';
        $estimate->save();

        $subtotal = InvoiceProduct::where('invoice_id', $invoice->id)->sum('total');
        Invoice::where('id', $invoice->id)->update(['subtotal' => $subtotal]);

        return redirect()->route('invoices.show', $invoice->id)->with('sucess', 'Estimate converted to Invoice Successfully');

    }

    public function emailTemplate(Request $request)
    {
        $estimate = Estimate::where('id', $request->id)->first();
        $template = EmailTemplateContent::where('id', $request->email_template)->first();
        $subject  = getEstimateSubject($template->subject, $request->id);
        $message  = getEstimateMessage($template->message, $request->id);

        return response()->json(['email' => $estimate->customer->email, 'subject' => $subject, 'message' => $message]);
    }

    public function confirmation(Request $request){
        Estimate::where('id', $request->estimate_id)->update(['status' => 'sent']);
        $estimate = Estimate::where('id', $request->estimate_id)->first();
        Mail::to($request->email_address)->send(new SendEstimateConfirmation($estimate, nl2br($request->email_message), $request->email_subject));
        return redirect()->back()->with('success', 'Estimate has been sent for Estimate No. '.$estimate->id.' !');

    }
}
