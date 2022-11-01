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
            'address_1' => 'C-6, Sector 7',
            'address_2' => 'Noida',
            'city' => 'GB Nagar',
            'state' => 'Uttar Pradesh',
            'country' => 'India',
            'eir_code' => '110009',
            'notes'     => 'Date:10-30-2022 10:05:00 Note:Note 1 inserted here',
            'status' => 'completed'
        ]);

        Customer::create([
            'id' => 2,
            'name' => 'Kenny D',
            'email' => 'info@daltontv.ie',
            'phone' => '8747856988',
            'phone_name' => 'Home',
            'mobile_1' => '9876543210',
            'mobile_1_name' => 'Mobile',
            'mobile_2' => '975312648',
            'mobile_2_name' => 'Office',
            'address_1' => 'Kilkenny Commercial Centre',
            'address_2' => 'Sion Road',
            'city' => 'Kilkenny',
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => 'LOC8',
            'notes'     => 'Date:10-30-2022 10:05:00 Note:Note 1 inserted here',
            'status' => 'completed'
        ]);

    }
}
