<?php

namespace Database\Seeders;

use App\Models\EmailTemplate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmailTemplateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmailTemplate::create([
            'type' => 'jobs',
            'mode' => 'confirmation',
            'subject' => 'You\'ve been booked in with {{COMPANY_NAME}}',
            'message' => 'Hi {{CUSTOMER_NAME}},<br>Thank you for booking with us.<br>Your work has been booked on {{JOB_DATE_AND_TIME}} at {{JOB_LOCATION}}.<br>Sincerely,<br>{{COMPANY_NAME}}',
            'default_subject' => 'You\'ve been booked in with {{COMPANY_NAME}}',
            'default_message' => 'Hi {{CUSTOMER_NAME}},<br>Thank you for booking with us.<br>Your work has been booked on {{JOB_DATE_AND_TIME}} at {{JOB_LOCATION}}.<br>Sincerely,<br>{{COMPANY_NAME}}',
        ]);

        EmailTemplate::create([
            'type' => 'estimates',
            'mode' => 'confirmation',
            'subject' => 'Work Estimate from {{COMPANY_NAME}}',
            'message' => 'Hi {{CUSTOMER_NAME}},<br>Thank you for sharing your interest in our services.<br>An Estimate has been generated acording to your query successfully.<br>Please find estimate in attachment of this email.<br>Sincerely,<br>{{COMPANY_NAME}}',
            'default_subject' => 'You\'ve been booked in with {{COMPANY_NAME}}',
            'default_message' => 'Hi {{CUSTOMER_NAME}},<br>Thank you for sharing your interest in our services.<br>An Estimate has been generated acording to your query successfully.<br>Please find estimate in attachment of this email.<br>Sincerely,<br>{{COMPANY_NAME}}',
        ]);

        EmailTemplate::create([
            'type' => 'invoices',
            'mode' => 'confirmation',
            'subject' => 'Subject',
            'message' => 'Message',
            'default_message' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'invoices',
            'mode' => 'follow-up',
            'subject' => 'Subject',
            'message' => 'Message',
            'default_message' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'standard',
            'mode' => 'standard',
            'subject' => 'Standard Template 1',
            'message' => 'Message',
            'default_message' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'standard',
            'mode' => 'standard',
            'subject' => 'Standard Template 2',
            'message' => 'Message',
            'default_message' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'standard',
            'mode' => 'standard',
            'subject' => 'Standard Template 3',
            'message' => 'Message',
            'default_message' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'standard',
            'mode' => 'standard',
            'subject' => 'Standard Template 4',
            'message' => 'Message',
            'default_message' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'standard',
            'mode' => 'standard',
            'subject' => 'Standard Template 5',
            'message' => 'Message',
            'default_message' => 'Default Message',
        ]);
    }
}
