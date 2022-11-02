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
            'name' => 'John Mathews',
            'email' => 'johnmathew@gmail.com',
            'phone' => '8700844557',
            'phone_name' => 'Home',
            'mobile_1' => '9793929110',
            'mobile_1_name' => 'Office',
            'mobile_2' => '7898487857',
            'address_1' => 'Kilkenny Commercial Centre',
            'address_2' => 'Sion Road',
            'city' => 'Kilkenny',
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => 'LOC8',
            'status' => 'pending'
        ]);

        Lead::create([
            'id' => 2,
            'name' => 'Danny Rotwell',
            'email' => 'danny@gmail.com',
            'phone' => '8090895865',
            'phone_name' => 'Home',
            'mobile_1' => '9793929111',
            'mobile_1_name' => 'Office',
            'mobile_2' => '7845854796',
            'address_1' => 'Co.Kilkenny',
            'address_2' => 'Carlow',
            'city' => 'Kilkenny',
            'state' => 'Derry',
            'country' => 'Ireland',
            'eir_code' => 'ROI',
            'status' => 'pending'
        ]);

        Lead::create([
            'id' => 3,
            'name' => 'Judy Langton',
            'email' => 'judy_langton@gmail.com',
            'phone' => '8090895475',
            'phone_name' => 'Home',
            'mobile_1' => '9793929551',
            'mobile_1_name' => 'Office',
            'mobile_2' => NULL,
            'address_1' => 'St Annes',
            'address_2' => 'Waterford Rd.',
            'city' => 'Kilkenny',
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => 'RV23',
            'status' => 'pending'
        ]);

        Lead::create([
            'id' => 4,
            'name' => 'Mary Corby',
            'email' => 'mary@gmail.com',
            'phone' => '08748514785',
            'phone_name' => 'Home',
            'mobile_1' => '0868877936',
            'mobile_2' => '4585745896',
            'address_1' => '2 Collaire Court',
            'address_2' => 'Friary Walk',
            'city' => 'Callan',
            'state' => 'Kilkenny',
            'country' => 'Ireland',
            'eir_code' => 'VR67',
            'status' => 'pending'
        ]);
    }
}
