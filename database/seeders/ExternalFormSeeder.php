<?php

namespace Database\Seeders;

use App\Models\ExternalForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExternalFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExternalForm::create(['title' => 'Contact Form', 'slug' => 'contact-form', 'type' => 'single']);

        ExternalForm::create(['title' => 'Mobile Form Repeater Contact Form', 'slug' => 'mobile-phone-repeater-contact-form', 'type' => 'multi-step']);

        ExternalForm::create(['title' => 'Full Home Wi-fi Contact Form', 'slug' => 'full-home-wi-fi-contact-form', 'type' => 'multi-step']);
    }
}
