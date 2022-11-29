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
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for booking with us.\nYour work has been booked on {{JOB_DATE_AND_TIME}} at {{JOB_LOCATION}}.\nSincerely,\n{{COMPANY_NAME}}",
            'default_subject' => 'You\'ve been booked in with {{COMPANY_NAME}}',
            'default_message' => "Hi {{CUSTOMER_NAME}},\nThank you for booking with us.\nYour work has been booked on {{JOB_DATE_AND_TIME}} at {{JOB_LOCATION}}.\nSincerely,\n{{COMPANY_NAME}}",
        ]);

        EmailTemplate::create([
            'type' => 'estimates',
            'mode' => 'confirmation',
            'subject' => 'Work Estimate from {{COMPANY_NAME}}',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nAn Estimate has been generated according to your query successfully.\nPlease find estimate in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
            'default_subject' => 'Work Estimate from {{COMPANY_NAME}}',
            'default_message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nAn Estimate has been generated acording to your query successfully.\nPlease find estimate in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
        ]);

        EmailTemplate::create([
            'type' => 'invoices',
            'mode' => 'confirmation',
            'subject' => 'New Invoice from {{COMPANY_NAME}}',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nAn Invoice has been generated for the Job Work successfully.\nPlease find Invoice in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
            'default_subject' => 'New Invoice from {{COMPANY_NAME}}',
            'default_message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nAn Invoice has been generated for the Job Work successfully.\nPlease find Invoice in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
        ]);

        EmailTemplate::create([
            'type' => 'invoices',
            'mode' => 'follow-up',
            'subject' => 'Invoice Follow Up from {{COMPANY_NAME}}',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nPlease pay the balance amount.\nPlease find Invoice in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
            'default_subject' => 'Invoice Follow Up from {{COMPANY_NAME}}',
            'default_message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nPlease pay the balance amount.\nPlease find Invoice in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
        ]);

        // EmailTemplate::create([
        //     'type' => 'standard',
        //     'mode' => 'standard',
        //     'subject' => 'Standard Template 1',
        //     'message' => 'Message',
        //     'default_message' => 'Default Message',
        // ]);
    }
}
