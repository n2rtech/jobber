<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Job;
use App\Models\JobTitle;
use App\Models\Product;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $jobs        = Job::get();
       $setting     = Setting::where('type', 'invoice')->value('value');

       foreach($jobs as $job){

            $invoice                           = new Invoice();
            $invoice->customer_id              = $job->customer_id;
            $invoice->job_id                   = $job->id;
            $invoice->user_id                  = 1;
            $invoice->same_as_billing_address  = false;
            $invoice->shipping_address_1       = $job->customer->address_1;
            $invoice->shipping_address_2       = $job->customer->address_2;
            $invoice->shipping_city            = $job->customer->city;
            $invoice->shipping_state           = $job->customer->state;
            $invoice->shipping_country         = $job->customer->country;
            $invoice->shipping_eir_code        = $job->customer->eir_code;
            $invoice->due_date                 = Carbon::parse($job->created_at)->format('Y-m-d');
            $invoice->invoice_date             = Carbon::parse($job->created_at)->format('Y-m-d');
            $invoice->notes                    = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
            $invoice->conditions               = $setting['conditions'];
            $invoice->save();

            foreach($job->products as $job_product){
                $selected_product       = Product::where('id',  $job_product->product_id)->first();
                $product                = new InvoiceProduct();
                $product->invoice_id    = $invoice->id;
                $product->product_id    = $job_product->product_id;
                $product->description   = $job_product->description;
                $product->quantity      = $job_product->quantity;
                $product->unit_price    = $job_product->unit_price;
                $product->tax_rate      = $selected_product->tax->rate;
                $product->tax_amount    = ($job_product->total * $selected_product->tax->rate / 100);
                $product->total         = ($job_product->total + $job_product->total * $selected_product->tax->rate / 100);
                $product->save();
            }

            $subtotal = InvoiceProduct::where('invoice_id', $invoice->id)->sum('total');

            $deduct_discount = 0.00;
            $added_tax = InvoiceProduct::where('invoice_id', $invoice->id)->sum('tax_amount');

            if($invoice->discount_type == 'percentage'){
                $deduct_discount = $subtotal * $job->discount / 100;
            }

            if($invoice->discount_type == 'amount'){
                $deduct_discount = $job->discount;
            }

            $total = ($subtotal + $added_tax - $deduct_discount);
            Invoice::where('id', $invoice->id)->update(['subtotal' => $subtotal, 'total' => $total]);
       }
    }
}
