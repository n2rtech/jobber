<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\CustomerNote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerNoteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = Customer::get(['id']);

        foreach($customers as $customer){
            for ($y = 0; $y <= 4; $y++) {
                $note               = new CustomerNote();
                $note->customer_id  = $customer->id;
                $note->user_id      = 1;
                $note->note         = 'Customer Note '.$y++.': Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
                $note->save();
            }
        }
    }
}
