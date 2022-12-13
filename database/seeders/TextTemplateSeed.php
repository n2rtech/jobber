<?php

namespace Database\Seeders;

use App\Models\TextTemplate;
use App\Models\TextTemplateContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TextTemplateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TextTemplate::create([
            'id' => 1,
            'type' => 'jobs',
            'mode' => 'confirmation',
        ]);

        TextTemplateContent::create([
            'text_template_id' => 1,
            'template_name' => 'Confirm Booking Template 1',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for booking with us.\nYour work has been booked on {{JOB_DATE_AND_TIME}} at {{JOB_LOCATION}}.\nSincerely,\n{{COMPANY_NAME}}",
        ]);

        TextTemplateContent::create([
            'text_template_id' => 1,
            'template_name' => 'Confirm Booking Template 2',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for giving us the opportunity for working for you.\nYour work has been booked with {{COMPANY_NAME}} on {{JOB_DATE_AND_TIME}} at {{JOB_LOCATION}}.\nSincerely,\n{{COMPANY_NAME}}",
        ]);

        // TextTemplate::create([
        //     'type' => 'standard',
        //     'mode' => 'standard',
        //     'subject' => 'Standard Template 1',
        //     'message' => 'Message',
        //     'default_message' => 'Default Message',
        // ]);
    }
}
