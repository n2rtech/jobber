<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lead::create([
            'id' => 1,
            'name' => 'Nurul hasan',
            'email' => 'nurulhasasn129@gmail.com',
            'phone' => '9968584843',
            'phone_name' => 'Home',
            'mobile_1' => '9793929109',
            'mobile_1_name' => 'Office',
            'mobile_2' => NULL,
            'address_1' => 'C-6 Sector 7',
            'address_2' => 'Noida',
            'city' => 'Noida',
            'state' => 'Uttar Pradesh',
            'country' => 'India',
            'eir_code' => '201301',
            'status' => 'pending'
        ]);

        Lead::create([
            'id' => 2,
            'name' => 'Mohd Danish',
            'email' => 'mohddanish@gmail.com',
            'phone' => '8700844557',
            'phone_name' => 'Home',
            'mobile_1' => '9793929110',
            'mobile_1_name' => 'Office',
            'mobile_2' => NULL,
            'address_1' => 'B-12, Udaygiri Appartment',
            'address_2' => 'Sector 34',
            'city' => 'Noida',
            'state' => 'Uttar Pradesh',
            'country' => 'India',
            'eir_code' => '201301',
            'status' => 'pending'
        ]);

        Lead::create([
            'id' => 3,
            'name' => 'Sohrab Khan',
            'email' => 'sohrab178@gmail.com',
            'phone' => '8090895865',
            'phone_name' => 'Home',
            'mobile_1' => '9793929111',
            'mobile_1_name' => 'Office',
            'mobile_2' => NULL,
            'address_1' => 'D-18 Sunrise Colony',
            'address_2' => 'Sector 27',
            'city' => 'Noida',
            'state' => 'Uttar Pradesh',
            'country' => 'India',
            'eir_code' => '201301',
            'status' => 'pending'
        ]);

        Lead::create([
            'id' => 4,
            'name' => 'Vidhi Das',
            'email' => 'vidhidas@gmail.com',
            'phone' => '8090895475',
            'phone_name' => 'Home',
            'mobile_1' => '9793929551',
            'mobile_1_name' => 'Office',
            'mobile_2' => NULL,
            'address_1' => 'F-55 Rivera Appartment',
            'address_2' => 'Sector 07',
            'city' => 'Noida',
            'state' => 'Uttar Pradesh',
            'country' => 'India',
            'eir_code' => '201301',
            'status' => 'pending'
        ]);
    }
}
