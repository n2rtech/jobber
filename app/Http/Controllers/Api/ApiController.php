<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Job;
use App\Models\JobProduct;
use App\Models\JobTitle;
use App\Models\Product;
use App\Models\Setting;
use App\Notifications\FormLinkNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class ApiController extends Controller
{
    public function save(Request $request){

        $product_id                     = Product::where('product_id', $request->product_id)->value('id');

        $products                       = Product::whereIn('id', [$product_id])->get();

        $customer_exists                = Customer::where('email', $request->email)->exists();

        if($customer_exists){

            $customer_id                = Customer::where('email', $request->email)->value('id');

        }else{

            $customer                   = new Customer;
            $customer->type             = 'sales-lead';
            $customer->name             = $request->firstname.' '.$request->lastname;
            $customer->address_1        = $request->address_1;
            $customer->address_2        = $request->address_2;
            $customer->city             = $request->city;
            $customer->country          = $request->county;
            $customer->eir_code         = $request->eir_code;
            $customer->phone            = $request->phone;
            $customer->mobile_1         = $request->phone_other;
            $customer->email            = $request->email;
            $customer->save();

            $customer_id                = $customer->id;

        }

        $job                            = new Job();
        $job->customer_id               = $customer_id;
        $job->job_title_id              = 1;
        $job->instructions              = null;
        $job->invoice_remind            = true;
        $job->job_forms                 = [1];
        $job->total                     = 0;
        $job->token                     = Str::random(20);
        $job->save();

        if(count($products) > 0){
            foreach($products as $product){
                $jobproduct                = new JobProduct();
                $jobproduct->job_id        = $job->id;
                $jobproduct->product_id    = $product->id;
                $jobproduct->description   = $product->description;
                $jobproduct->quantity      = 1;
                $jobproduct->unit_price    = $product->unit_price;
                $jobproduct->total         = $product->unit_price;
                $jobproduct->tax_rate      = $product->tax->rate;
                $jobproduct->tax_amount    = ($product->unit_price * $product->tax->rate / 100);
                $jobproduct->save();
            }
        }

        $total = JobProduct::where('job_id', $job->id)->sum('total');
        Job::where('id', $job->id)->update(['total' => $total]);

        $setting    = Setting::where('type', 'invoice')->value('value');

        $invoice                        = new Invoice();
        $invoice->customer_id           = $job->customer_id;
        $invoice->job_id                = $job->id;
        $invoice->user_id               = null;
        $invoice->same_as_billing_address      = true;
        $invoice->due_date              = $job->created_at->addDays($setting['due_on_receipt']);
        $invoice->invoice_date          = Carbon::parse($job->created_at)->format('Y-m-d');
        $invoice->notes                 = Null;
        $invoice->conditions            = $setting['conditions'];
        $invoice->total                 = 0;
        $invoice->save();

        foreach($job->products as $job_product){
            $selected_product       = Product::where('id',  $job_product->product_id)->first();
            $invoiceproduct                = new InvoiceProduct();
            $invoiceproduct->invoice_id    = $invoice->id;
            $invoiceproduct->product_id    = $job_product->product_id;
            $invoiceproduct->description   = $job_product->description;
            $invoiceproduct->quantity      = $job_product->quantity;
            $invoiceproduct->unit_price    = $job_product->unit_price;
            $invoiceproduct->tax_rate      = $selected_product->tax->rate;
            $invoiceproduct->tax_amount    = $job_product->total * $selected_product->tax->rate / 100;
            $invoiceproduct->total         = $job_product->total;
            $invoiceproduct->save();
        }

        $subtotal = InvoiceProduct::where('invoice_id', $invoice->id)->sum('total');

        $deduct_discount = 0.00;
        $added_tax       = InvoiceProduct::where('invoice_id', $invoice->id)->sum('tax_amount');

        if($invoice->discount_type == 'percentage'){
            $deduct_discount = $subtotal * $job->discount / 100;
        }

        if($invoice->discount_type == 'amount'){
            $deduct_discount = $job->discount;
        }

        $total = ($subtotal + $added_tax - $deduct_discount);
        Invoice::where('id', $invoice->id)->update(['subtotal' => $subtotal, 'total' => $total]);
        $notifycustomer = Customer::where('id', $job->customer_id)->first();
        $notifycustomer->notify(new FormLinkNotification($job->token));
        return response()->json(['success'=> 'Data Saved Successfully'], 200);
    }
}
