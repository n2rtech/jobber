<?php

namespace App\Http\Controllers;

use App\Mail\SendInvoiceConfirmation;
use App\Models\CompanyDetail;
use App\Models\Customer;
use App\Models\EmailTemplate;
use App\Models\EmailTemplateContent;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Job;
use App\Models\JobProduct;
use App\Models\Product;
use App\Models\SentEmail;
use App\Models\Setting;
use App\Models\TaxRate;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

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

        $filter_phone               = $request->phone;

        $filter_status              = $request->status;

        $filter_invoice_from                = $request->invoice_from;

        $filter_invoice_to               = $request->invoice_to;

        if(isset($filter_name) || isset($filter_invoice_from) || isset($filter_invoice_to) || isset($filter_phone) || isset($filter_status) || isset($filter_date)){
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

        if ($request->invoice_from && $request->invoice_to) {

            $from   = date("Y-m-d", strtotime($request->input('invoice_from')));
            $to     = date('Y-m-d', strtotime($request->input('invoice_to')));
            $invoices->whereBetween('invoice_date', [$from, $to]);
        }

        if ($request->invoice_from) {
            $from   = date("Y-m-d", strtotime($request->input('invoice_from')));
            $invoices->whereDate('invoice_date', '>=', $from);
        }

        if ($request->invoice_to) {
            $to     = date('Y-m-d', strtotime($request->input('invoice_to')));
            $invoices->whereDate('invoice_date', '<=', $to);
        }


        $invoices                   = $invoices->whereNot('total', '0.00')->orderBy('id', 'desc')->get();

        $template_confirmation      = EmailTemplate::where('type', 'invoices')->where('mode', 'confirmation')->first();

        $template_followup          = EmailTemplate::where('type', 'invoices')->where('mode', 'follow-up')->first();

        return view('invoices.index', compact('invoices', 'filter_name', 'filter_invoice_from', 'filter_phone', 'filter_status', 'filter_invoice_to', 'filter_box', 'template_confirmation', 'template_followup'));
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

        return redirect()->route('invoices.show', $invoice->id)->with('success', 'Invoice added successfully!');
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
        $template_confirmation      = EmailTemplate::where('type', 'invoices')->where('mode', 'confirmation')->first();
        $template_followup          = EmailTemplate::where('type', 'invoices')->where('mode', 'follow-up')->first();
        return view('invoices.view', compact('invoice', 'products', 'tax_rates', 'setting', 'company', 'template_confirmation', 'template_followup'));
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
        if(isset($invoice->job_id)){
            JobProduct::where('job_id', $invoice->job_id)->delete();
        }
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

                if(isset($invoice->job_id)){
                    $job_product                = new JobProduct();
                    $job_product->job_id        = $invoice->job_id;
                    $job_product->product_id    = $value['product'];
                    $job_product->description   = $value['description'];
                    $job_product->quantity      = $value['quantity'];
                    $job_product->unit_price    = $value['unit_price'];
                    $job_product->total         = $value['total'];
                    $job_product->save();
                }
            }

        }

        if(isset($invoice->job_id)){
            $total = JobProduct::where('job_id', $invoice->job_id)->sum('total');
            Job::where('id', $invoice->job_id)->update(['total' => $total]);
        }

        $subtotal =InvoiceProduct::where('invoice_id', $invoice->id)->sum('total');
        Invoice::where('id', $invoice->id)->update(['subtotal' => $subtotal]);

        return redirect()->route('invoices.show', $invoice->id)->with('success', 'Invoice updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        Job::where('id', $invoice->job_id)->delete();
        InvoiceProduct::where('invoice_id', $id)->delete();
        $invoice->delete();
        return redirect()->route('invoices.index')->with('success', 'Invoice deleted successfully!');
    }

    public function emailTemplate(Request $request)
    {
        $invoice  = Invoice::where('id', $request->id)->first();
        $template = EmailTemplateContent::where('id', $request->email_template)->first();
        $subject  = getInvoiceSubject($template->subject, $request->id);
        $message  = getInvoiceMessage($template->message, $request->id);

        return response()->json(['email' => $invoice->customer->email, 'subject' => $subject, 'message' => $message]);
    }

    public function confirmation(Request $request){
        $emails = explode(",",$request->email_address);
        $invoice = Invoice::where('id', $request->invoice_id)->first();
        $template = EmailTemplateContent::where('id', $request->email_template)->first();
        $mode     = EmailTemplate::where('id', $template->email_template_id)->value('mode');
        $company    = CompanyDetail::first();
        $tax_rates  = TaxRate::get();
        $data       = [
            'invoice'  => $invoice,
            'company'  => $company,
            'tax_rates' => $tax_rates,
        ];


        $pdf = Pdf::loadView('invoices.pdf', $data);
        Storage::put('public/uploads/invoices/'.$invoice->id.'/invoice.pdf', $pdf->output());
        foreach($emails as $email){
            $send_email_to = str_replace(' ', '', $email);
            Mail::to($send_email_to)->send(new SendInvoiceConfirmation($invoice, nl2br($request->email_message), $request->email_subject));
        }
        $sent_email              = new SentEmail();
        $sent_email->customer_id = $invoice->customer->id;
        $sent_email->user_id     = Auth::user()->id;
        $sent_email->medium      = 'email';
        $sent_email->type        = 'invoices';
        $sent_email->mode        =  $mode;
        $sent_email->subject     =  $request->email_subject;
        $sent_email->message     =  nl2br($request->email_message);
        $sent_email->custom_id   =  $invoice->id;
        $sent_email->save();

        return redirect()->back()->with('success', 'Invoice has been sent for Invoice No. '.$invoice->id.' !');

    }
}
