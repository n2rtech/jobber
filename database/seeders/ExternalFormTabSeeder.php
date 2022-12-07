<?php

namespace Database\Seeders;

use App\Models\ExternalFormTab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExternalFormTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExternalFormTab::create([
            'id'          => 1,
            'external_form_id' => 2,
            'tab'    => 'DIY or Professional Install'
        ]);

        ExternalFormTab::create([
            'id'          => 2,
            'external_form_id' => 2,
            'tab'    => 'Property Size / Mobile Operator'
        ]);

        ExternalFormTab::create([
            'id'          => 3,
            'external_form_id' => 2,
            'tab'    => 'Current Mobile Signal'
        ]);

        ExternalFormTab::create([
            'id'          => 4,
            'external_form_id' => 2,
            'tab'    => 'Your Contact Details'
        ]);

        ExternalFormTab::create([
            'id'          => 5,
            'external_form_id' => 3,
            'tab'    => 'Broadband Information'
        ]);

        ExternalFormTab::create([
            'id'          => 6,
            'external_form_id' => 3,
            'tab'    => 'Your Contact Details'
        ]);
    }
}
