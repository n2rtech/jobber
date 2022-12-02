<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Job;
use App\Models\JobProduct;
use App\Models\JobTitle;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = Customer::get(['id', 'name']);

        for ($x = 0; $x <= 3; $x++) {

            foreach ($customers as $customer) {

                $job_title = JobTitle::inRandomOrder()->first();;

                $job = Job::create([
                    'customer_id'           => $customer->id,
                    'job_title_id'          => $job_title->id,
                    'user_id'               => NULL,
                    'instructions'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
                    'invoice_remind'        => 1,
                    'job_forms'             => [1],
                    'scheduled'             => 'no',
                    'status'                => 'pending',
                    'start'                 => NULL,
                    'end'                   => NULL,
                    'total'                 => NULL,
                    'created_at'            => Carbon::now(),
                    'updated_at'            => Carbon::now(),
                ]);

                $products  = Product::all()->random(4);

                foreach ($products as $product) {

                    JobProduct::create([
                        'job_id'        => $job->id,
                        'product_id'    => $product->id,
                        'description'   => $product->description,
                        'quantity'      => 1,
                        'unit_price'    => $product->unit_price,
                        'total'         => 1 * $product->unit_price,
                        'created_at'    => Carbon::now(),
                        'updated_at'    => Carbon::now(),
                    ]);
                }

                $total = JobProduct::where('job_id', $job->id)->sum('total');
                Job::where('id', $job->id)->update(['total' => $total]);

            }
        }
    }
}
