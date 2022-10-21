<?php

namespace Database\Seeders;

use App\Models\TaxRate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaxRate::create(['name' => 'VAT 13.5%', 'rate' => 13.50]);

        TaxRate::create(['name' => 'VAT 23%', 'rate' => 23.00]);

    }
}
