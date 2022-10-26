<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'id' => 1,
            'name' => 'N2R Technologies',
            'email' => 'info@n2rtechnologies.com',
            'phone' => '9968584843',
            'phone_name' => 'Nurul Hasan',
            'mobile_1' => '9999577620',
            'mobile_1_name' => 'Prashant',
            'mobile_2' => '9555108968',
            'mobile_2_name' => 'Kenny',
            'address_1' => 'Kilkenny Commercial Centre',
            'address_2' => 'Sion Road',
            'city' => 'Kilkenny',
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => 'LOC8',
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 2,
            'name' => 'Prashant Chauhan',
            'email' => 'sprashant@n2rtechnologies.in',
            'phone' => '9555108987',
            'phone_name' => 'Home',
            'mobile_1' => '8800644452',
            'mobile_1_name' => 'Shop',
            'mobile_2' => '9858745698',
            'mobile_2_name' => 'Kenny',
            'address_1' => 'M-4, New Police Line,',
            'address_2' => 'Kingsway Camp',
            'city' => 'Delhi',
            'state' => 'New Delhi',
            'country' => 'India',
            'eir_code' => '110009',
            'status' => 'completed'
        ]);




    }
}
