<?php

namespace Database\Seeders;

use App\Models\CompanyDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyDetail::create([
            'company'   => 'Dalton TV',
            'email'     => 'info@daltontv.ie',
            'mobile'    => '0872992300',
            'address_1' => 'Until 15 A Hebron Industrial Estate',
            'address_2' => 'Hebron Road',
            'city'      => 'Kilkenny',
            'zipcode'   => 'V93',
            'state'     => 'Leinster',
            'country'   => 'Ireland'
        ]);
    }
}
