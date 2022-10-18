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
            'question'    => 'Job Form 1 question 1',
            'type'        => 'checkbox'
        ]);

        JobFormQuestion::create([
            'id'          => 2,
            'job_form_id' => 1,
            'question'    => 'Job Form 1 question 2',
            'type'        => 'dropdown'
        ]);

        JobFormQuestion::create([
            'id'          => 3,
            'job_form_id' => 1,
            'question'    => 'Job Form 1 question 3',
            'type'        => 'radio'
        ]);

        JobFormQuestion::create([
            'id'          => 4,
            'job_form_id' => 1,
            'question'    => 'Job Form 1 question 4',
            'type'        => 'text'
        ]);

        JobFormQuestion::create([
            'id'          => 5,
            'job_form_id' => 1,
            'question'    => 'Job Form 1 question 5',
            'type'        => 'textarea'
        ]);

        JobFormQuestion::create([
            'id'          => 6,
            'job_form_id' => 2,
            'question'    => 'Job Form 2 question 1',
            'type'        => 'checkbox'
        ]);

        JobFormQuestion::create([
            'id'          => 7,
            'job_form_id' => 2,
            'question'    => 'Job Form 2 question 2',
            'type'        => 'dropdown'
        ]);

        JobFormQuestion::create([
            'id'          => 8,
            'job_form_id' => 2,
            'question'    => 'Job Form 2 question 3',
            'type'        => 'radio'
        ]);

        JobFormQuestion::create([
            'id'          => 9,
            'job_form_id' => 2,
            'question'    => 'Job Form 2 question 4',
            'type'        => 'text'
        ]);

        JobFormQuestion::create([
            'id'          => 10,
            'job_form_id' => 2,
            'question'    => 'Job Form 2 question 5',
            'type'        => 'textarea'
        ]);

        JobFormQuestion::create([
            'id'          => 11,
            'job_form_id' => 3,
            'question'    => 'Job Form 3 question 1',
            'type'        => 'checkbox'
        ]);

        JobFormQuestion::create([
            'id'          => 12,
            'job_form_id' => 3,
            'question'    => 'Job Form 3 question 2',
            'type'        => 'dropdown'
        ]);

        JobFormQuestion::create([
            'id'          => 13,
            'job_form_id' => 3,
            'question'    => 'Job Form 3 question 3',
            'type'        => 'radio'
        ]);

        JobFormQuestion::create([
            'id'          => 14,
            'job_form_id' => 3,
            'question'    => 'Job Form 3 question 4',
            'type'        => 'text'
        ]);

        JobFormQuestion::create([
            'id'          => 15,
            'job_form_id' => 3,
            'question'    => 'Job Form 3 question 5',
            'type'        => 'textarea'
        ]);
    }
}
