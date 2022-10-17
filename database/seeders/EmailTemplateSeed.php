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
            'subject' => 'Subject',
            'message' => 'Message',
            'default' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'estimates',
            'mode' => 'confirmation',
            'subject' => 'Subject',
            'message' => 'Message',
            'default' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'invoices',
            'mode' => 'confirmation',
            'subject' => 'Subject',
            'message' => 'Message',
            'default' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'invoices',
            'mode' => 'follow-up',
            'subject' => 'Subject',
            'message' => 'Message',
            'default' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'standard',
            'mode' => 'standard',
            'subject' => 'Standard Template 1',
            'message' => 'Message',
            'default' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'standard',
            'mode' => 'standard',
            'subject' => 'Standard Template 2',
            'message' => 'Message',
            'default' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'standard',
            'mode' => 'standard',
            'subject' => 'Standard Template 3',
            'message' => 'Message',
            'default' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'standard',
            'mode' => 'standard',
            'subject' => 'Standard Template 4',
            'message' => 'Message',
            'default' => 'Default Message',
        ]);

        EmailTemplate::create([
            'type' => 'standard',
            'mode' => 'standard',
            'subject' => 'Standard Template 5',
            'message' => 'Message',
            'default' => 'Default Message',
        ]);
    }
}
