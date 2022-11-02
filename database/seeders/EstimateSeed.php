<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Estimate;
use App\Models\EstimateProduct;
use App\Models\Job;
use App\Models\JobTitle;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstimateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $jobs = Job::get();

       foreach($jobs as $job){
            $estimate                        = new Estimate();
            $estimate->customer_id           = $job->customer_id;
            $estimate->user_id               = 1;
            $estimate->shipping_address      = Null;
            $estimate->expiry_date              = Carbon::parse($job->created_at)->format('Y-m-d');
            $estimate->estimate_date          = Carbon::parse($job->created_at)->format('Y-m-d');
            $estimate->discount              = 10;
            $estimate->discount_type         = "percentage";
            $estimate->tax                   = 20;
            $estimate->tax_type              = "percentage";
            $estimate->notes                 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
            $estimate->conditions            = "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
            $estimate->total                 = Null;
            $estimate->save();

            foreach($job->products as $job_product){
                $product                = new EstimateProduct();
                $product->estimate_id   = $estimate->id;
                $product->product_id    = $job_product->product_id;
                $product->description   = $job_product->description;
                $product->quantity      = $job_product->quantity;
                $product->unit_price    = $job_product->unit_price;
                $product->total         = $job_product->total;
                $product->save();
            }

            $subtotal = EstimateProduct::where('estimate_id', $estimate->id)->sum('total');

            if($estimate->discount_type == 'percentage'){
                $deduct_discount = $subtotal * $job->discount / 100;
            }

            if($estimate->discount_type == 'amount'){
                $deduct_discount = $job->discount;
            }

            if($estimate->tax_type == 'percentage'){
                $added_tax = $subtotal * $job->tax / 100;
            }

            if($estimate->tax_type == 'amount'){
                $added_tax = $subtotal * $job->tax / 100;
            }
            $total = ($subtotal + $added_tax - $deduct_discount);
            Estimate::where('id', $estimate->id)->update(['subtotal' => $subtotal, 'total' => $total]);
       }
    }
}
