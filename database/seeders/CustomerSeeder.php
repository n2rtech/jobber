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
            'name' => 'Nurul Hasan',
            'email' => 'sales@n2rtechnologies.com',
            'phone' => '9968584843',
            'phone_name' => 'Personal',
            'mobile_1' => '9793929109',
            'mobile_1_name' => 'Home',
            'mobile_2' => '+1(209)8130144',
            'mobile_2_name' => 'Office',
            'address_1' => 'C-6, Sector 7',
            'address_2' => 'Noida',
            'city' => 'GB Nagar',
            'state' => 'Uttar Pradesh',
            'country' => 'India',
            'eir_code' => '110009',
            'notes'     => '<table class="table table-sm"><tbody><tr><th style="border-top:none;">Date</th><td style="border-top:none;" class="text-right"><span class="badge bg-warning">2022-11-04 08:03:11</span></td><tr/><tr><th style="border-top:none;" width="20%">Note</th><td style="border-top:none;" class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy</td><tr/></tbody></table><hr><table class="table table-sm"><tbody><tr><th style="border-top:none;">Date</th><td style="border-top:none;" class="text-right"><span class="badge bg-warning">2022-11-04 08:02:53</span></td><tr/><tr><th style="border-top:none;" width="20%">Note</th><td style="border-top:none;" class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy</td><tr/></tbody></table><hr>',
            'status' => 'pending'
        ]);

        Customer::create([
            'id' => 2,
            'name' => 'Tim Miler',
            'email' => 'tim@example.com',
            'phone' => '+353522692100',
            'phone_name' => 'Home',
            'mobile_1' => '+353867872603',
            'mobile_1_name' => 'Mobile',
            'mobile_2' => ' +35325540623 ',
            'mobile_2_name' => 'Dublin',
            'address_1' => '93 Park st Dundalk',
            'address_2' => 'New Ross',
            'city' => 'Bandon',
            'state' => 'County Cork',
            'country' => 'Ireland',
            'eir_code' => 'P47',
            'notes'     => '<table class="table table-sm"><tbody><tr><th style="border-top:none;">Date</th><td style="border-top:none;" class="text-right"><span class="badge bg-warning">2022-11-04 08:03:11</span></td><tr/><tr><th style="border-top:none;" width="20%">Note</th><td style="border-top:none;" class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy</td><tr/></tbody></table><hr><table class="table table-sm"><tbody><tr><th style="border-top:none;">Date</th><td style="border-top:none;" class="text-right"><span class="badge bg-warning">2022-11-04 08:02:53</span></td><tr/><tr><th style="border-top:none;" width="20%">Note</th><td style="border-top:none;" class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy</td><tr/></tbody></table><hr>',
            'status' => 'pending'
        ]);

        Customer::create([
            'id' => 3,
            'name' => 'Stephen Byrne',
            'email' => 'stephen@example.com',
            'phone' => '+353872474435',
            'phone_name' => 'Home',
            'mobile_1' => '+353467872205',
            'mobile_1_name' => 'Mobile',
            'mobile_2' => ' +35385940327 ',
            'mobile_2_name' => 'Dublin',
            'address_1' => '15 Village Court',
            'address_2' => 'Patrick St.',
            'city' => 'Kilkenny',
            'state' => 'Co Kilkenny',
            'country' => 'Ireland',
            'eir_code' => 'R27',
            'notes'     => '<table class="table table-sm"><tbody><tr><th style="border-top:none;">Date</th><td style="border-top:none;" class="text-right"><span class="badge bg-warning">2022-11-04 08:03:11</span></td><tr/><tr><th style="border-top:none;" width="20%">Note</th><td style="border-top:none;" class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy</td><tr/></tbody></table><hr><table class="table table-sm"><tbody><tr><th style="border-top:none;">Date</th><td style="border-top:none;" class="text-right"><span class="badge bg-warning">2022-11-04 08:02:53</span></td><tr/><tr><th style="border-top:none;" width="20%">Note</th><td style="border-top:none;" class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy</td><tr/></tbody></table><hr>',
            'status' => 'pending'
        ]);

        Customer::create([
            'id' => 4,
            'name' => 'Kenny Dalton',
            'email' => 'info@daltontv.ie',
            'phone' => '+353872992300',
            'phone_name' => 'Home',
            'mobile_1' => '+353567771900',
            'mobile_1_name' => 'Mobile',
            'mobile_2' => ' +35315240626 ',
            'mobile_2_name' => 'Dublin',
            'address_1' => '58 The Avenue',
            'address_2' => 'The Weir View',
            'city' => 'Kilkenny',
            'state' => 'Leinster',
            'country' => 'Ireland',
            'eir_code' => 'R95',
            'notes'     => '<table class="table table-sm"><tbody><tr><th style="border-top:none;">Date</th><td style="border-top:none;" class="text-right"><span class="badge bg-warning">2022-11-04 08:03:11</span></td><tr/><tr><th style="border-top:none;" width="20%">Note</th><td style="border-top:none;" class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy</td><tr/></tbody></table><hr><table class="table table-sm"><tbody><tr><th style="border-top:none;">Date</th><td style="border-top:none;" class="text-right"><span class="badge bg-warning">2022-11-04 08:02:53</span></td><tr/><tr><th style="border-top:none;" width="20%">Note</th><td style="border-top:none;" class="text-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy</td><tr/></tbody></table><hr>',
            'status' => 'pending'
        ]);

    }
}
