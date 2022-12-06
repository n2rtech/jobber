<?php

namespace Database\Seeders;

use App\Models\JobFormQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobFormQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobFormQuestion::create([
            'id'          => 1,
            'job_form_id' => 1,
            'question'    => 'Outside Signal',
            'type'        => 'dropdown'
        ]);

        JobFormQuestion::create([
            'id'          => 2,
            'job_form_id' => 1,
            'question'    => 'Indoor Signal',
            'type'        => 'dropdown'
        ]);

        JobFormQuestion::create([
            'id'          => 3,
            'job_form_id' => 1,
            'question'    => 'Mobile Operator',
            'type'        => 'radio'
        ]);

        JobFormQuestion::create([
            'id'          => 4,
            'job_form_id' => 2,
            'question'    => 'Example Dropdown Question 1',
            'type'        => 'dropdown'
        ]);

        JobFormQuestion::create([
            'id'          => 5,
            'job_form_id' => 2,
            'question'    => 'Example Radio Question 2',
            'type'        => 'radio'
        ]);

        JobFormQuestion::create([
            'id'          => 6,
            'job_form_id' => 2,
            'question'    => 'Example Checkbox Question 3',
            'type'        => 'checkbox'
        ]);
    }
}
