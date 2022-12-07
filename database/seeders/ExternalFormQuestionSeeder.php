<?php

namespace Database\Seeders;

use App\Models\ExternalFormQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExternalFormQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        * Run the Contact Form seeds.
        */

        ExternalFormQuestion::create([
            'id'          => 1,
            'external_form_id' => 1,
            'external_form_tab_id' => null,
            'question'    => 'Name',
            'type'        => 'text'
        ]);

        ExternalFormQuestion::create([
            'id'          => 2,
            'external_form_id' => 1,
            'external_form_tab_id' => null,
            'question'    => 'Phone Number',
            'type'        => 'text'
        ]);

        ExternalFormQuestion::create([
            'id'          => 3,
            'external_form_id' => 1,
            'external_form_tab_id' => null,
            'question'    => 'Email',
            'type'        => 'text'
        ]);

        ExternalFormQuestion::create([
            'id'          => 4,
            'external_form_id' => 1,
            'external_form_tab_id' => null,
            'question'    => 'Message',
            'type'        => 'textarea'
        ]);

        /*
        * Run the Mobile Form Repeater Contact Form (Tab - DIY or Professional Install) seeds.
        */

        ExternalFormQuestion::create([
            'id'          => 5,
            'external_form_id' => 2,
            'external_form_tab_id' => 1,
            'question'    => 'Select Install Type',
            'type'        => 'dropdown'
        ]);

        /*
        * Run the Mobile Form Repeater Contact Form (Tab - Property Size / Mobile Operator) seeds.
        */

        ExternalFormQuestion::create([
            'id'          => 6,
            'external_form_id' => 2,
            'external_form_tab_id' => 2,
            'question'    => 'Dwelling Size Sq/ft',
            'type'        => 'dropdown'
        ]);

        ExternalFormQuestion::create([
            'id'          => 7,
            'external_form_id' => 2,
            'external_form_tab_id' => 2,
            'question'    => 'Mobile Operator',
            'type'        => 'dropdown'
        ]);

        ExternalFormQuestion::create([
            'id'          => 8,
            'external_form_id' => 2,
            'external_form_tab_id' => 2,
            'question'    => 'Type of Mobile phone',
            'type'        => 'checkbox'
        ]);

        /*
        * Run the Mobile Form Repeater Contact Form (Tab - Current Mobile Signal) seeds.
        */

        ExternalFormQuestion::create([
            'id'          => 9,
            'external_form_id' => 2,
            'external_form_tab_id' => 3,
            'question'    => 'Signal outside my house',
            'type'        => 'radio'
        ]);

        ExternalFormQuestion::create([
            'id'          => 10,
            'external_form_id' => 2,
            'external_form_tab_id' => 3,
            'question'    => 'Signal inside my house',
            'type'        => 'radio'
        ]);

        /*
        * Run the Mobile Form Repeater Contact Form (Tab - Current Mobile Signal) seeds.
        */

        ExternalFormQuestion::create([
            'id'          => 11,
            'external_form_id' => 2,
            'external_form_tab_id' => 4,
            'question'    => 'Name',
            'type'        => 'text'
        ]);

        ExternalFormQuestion::create([
            'id'          => 12,
            'external_form_id' => 2,
            'external_form_tab_id' => 4,
            'question'    => 'Phone Number',
            'type'        => 'text'
        ]);

        ExternalFormQuestion::create([
            'id'          => 13,
            'external_form_id' => 2,
            'external_form_tab_id' => 4,
            'question'    => 'Email',
            'type'        => 'text'
        ]);

        ExternalFormQuestion::create([
            'id'          => 14,
            'external_form_id' => 2,
            'external_form_tab_id' => 4,
            'question'    => 'Eircode',
            'type'        => 'text'
        ]);

        /*
        * Run the Full Home Wi-fi Contact Form (Tab - Broadband Information) seeds.
        */

        ExternalFormQuestion::create([
            'id'          => 15,
            'external_form_id' => 3,
            'external_form_tab_id' => 5,
            'question'    => 'Current Broadband provider?',
            'type'        => 'dropdown'
        ]);

        ExternalFormQuestion::create([
            'id'          => 16,
            'external_form_id' => 3,
            'external_form_tab_id' => 5,
            'question'    => 'Current Broadband speed?',
            'type'        => 'dropdown'
        ]);

        ExternalFormQuestion::create([
            'id'          => 17,
            'external_form_id' => 3,
            'external_form_tab_id' => 5,
            'question'    => 'Dwelling Size',
            'type'        => 'dropdown'
        ]);

        ExternalFormQuestion::create([
            'id'          => 18,
            'external_form_id' => 3,
            'external_form_tab_id' => 5,
            'question'    => 'Does your Wi-Fi cover your entire house?',
            'type'        => 'radio'
        ]);

        /*
        * Run the Full Home Wi-fi Contact Form (Tab - Current Mobile Signal) seeds.
        */

        ExternalFormQuestion::create([
            'id'          => 19,
            'external_form_id' => 3,
            'external_form_tab_id' => 6,
            'question'    => 'Name',
            'type'        => 'text'
        ]);

        ExternalFormQuestion::create([
            'id'          => 20,
            'external_form_id' => 3,
            'external_form_tab_id' => 6,
            'question'    => 'Phone Number',
            'type'        => 'text'
        ]);

        ExternalFormQuestion::create([
            'id'          => 21,
            'external_form_id' => 3,
            'external_form_tab_id' => 6,
            'question'    => 'Email',
            'type'        => 'text'
        ]);

        ExternalFormQuestion::create([
            'id'          => 22,
            'external_form_id' => 3,
            'external_form_tab_id' => 6,
            'question'    => 'Eircode',
            'type'        => 'text'
        ]);
    }
}

