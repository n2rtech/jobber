<?php

namespace Database\Seeders;

use App\Models\EmailTemplate;
use App\Models\EmailTemplateContent;
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
            'id' => 1,
            'type' => 'jobs',
            'mode' => 'confirmation',
        ]);

        EmailTemplateContent::create([
            'email_template_id' => 1,
            'template_name' => 'Confirm Booking Template',
            'subject' => 'You\'ve been booked in with {{COMPANY_NAME}}',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for booking with us.\nYour work has been booked on {{JOB_DATE_AND_TIME}} at {{JOB_LOCATION}}.\nSincerely,\n{{COMPANY_NAME}}",
        ]);

        EmailTemplateContent::create([
            'email_template_id' => 1,
            'template_name' => 'Job Completed Template',
            'subject' => 'Your booked job with {{COMPANY_NAME}} has been completed',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for giving us the opportunity for working for you.\nYour work has been completed on {{JOB_DATE_AND_TIME}} at {{JOB_LOCATION}}.\nSincerely,\n{{COMPANY_NAME}}",
        ]);



        EmailTemplate::create([
            'id' => 2,
            'type' => 'estimates',
            'mode' => 'confirmation',
        ]);

        EmailTemplateContent::create([
            'email_template_id' => 2,
            'template_name' => 'Send Estimate Template 1',
            'subject' => 'Work Estimate from {{COMPANY_NAME}}',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nAn Estimate has been generated according to your query successfully.\nPlease find estimate in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
        ]);

        EmailTemplateContent::create([
            'email_template_id' => 2,
            'template_name' => 'Send Estimate Template 2',
            'subject' => 'New Estimate from {{COMPANY_NAME}}',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nAn Estimate has been generated according to your query successfully.\nPlease find estimate in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
        ]);


        EmailTemplate::create([
            'id' => 3,
            'type' => 'invoices',
            'mode' => 'confirmation',
        ]);

        EmailTemplateContent::create([
            'email_template_id' => 3,
            'template_name' => 'Send Invoice Template 1',
            'subject' => 'New Invoice from {{COMPANY_NAME}}',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nAn Invoice has been generated for the Job Work successfully.\nPlease find Invoice in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
        ]);

        EmailTemplateContent::create([
            'email_template_id' => 3,
            'template_name' => 'Send Invoice Template 2',
            'subject' => 'Hi {{CUSTOMER_NAME}}, New Invoice from {{COMPANY_NAME}}',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nAn Invoice has been generated for the Job Work successfully.\nPlease find Invoice in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
        ]);


        EmailTemplate::create([
            'id' => 4,
            'type' => 'invoices',
            'mode' => 'follow-up',
        ]);

        EmailTemplateContent::create([
            'email_template_id' => 4,
            'template_name' => 'Send Invoice Follow Up Template 1',
            'subject' => 'Invoice Follow Up from {{COMPANY_NAME}}',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nPlease pay the balance amount.\nPlease find Invoice in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
        ]);

        EmailTemplateContent::create([
            'email_template_id' => 4,
            'template_name' => 'Send Invoice Follow Up Template 2',
            'subject' => 'New Invoice Follow Up from {{COMPANY_NAME}}',
            'message' => "Hi {{CUSTOMER_NAME}},\nThank you for sharing your interest in our services.\nPlease pay the balance amount.\nPlease find Invoice in attachment of this email.\nSincerely,\n{{COMPANY_NAME}}",
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
