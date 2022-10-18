<?php

namespace Database\Seeders;

use App\Models\JobFormQuestionOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobFormQuestionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // JobForm 1 Options
        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 1,
            'option'                        => 'Job Form 1 > Question 1 > Checkbox Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 1,
            'option'                        => 'Job Form 1 > Question 1 > Checkbox Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 1,
            'option'                        => 'Job Form 1 > Question 1 > Checkbox Option 3'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 2,
            'option'                        => 'Job Form 1 > Question 2 > Dropdown Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 2,
            'option'                        => 'Job Form 1 > Question 2 > Dropdown Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 2,
            'option'                        => 'Job Form 1 > Question 2 > Dropdown Option 3'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 3,
            'option'                        => 'Job Form 1 > Question 3 > Radio Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 3,
            'option'                        => 'Job Form 1 > Question 3 > Radio Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 3,
            'option'                        => 'Job Form 1 > Question 3 > Radio Option 3'
        ]);

        // Job Form 3 Options

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 6,
            'option'                        => 'Job Form 2 > Question 1 > Checkbox Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 6,
            'option'                        => 'Job Form 2 > Question 1 > Checkbox Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 6,
            'option'                        => 'Job Form 2 > Question 1 > Checkbox Option 3'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 7,
            'option'                        => 'Job Form 2 > Question 2 > Dropdown Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 7,
            'option'                        => 'Job Form 2 > Question 2 > Dropdown Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 7,
            'option'                        => 'Job Form 2 > Question 2 > Dropdown Option 3'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 8,
            'option'                        => 'Job Form 2 > Question 3 > Radio Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 8,
            'option'                        => 'Job Form 2 > Question 3 > Radio Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 8,
            'option'                        => 'Job Form 2 > Question 3 > Radio Option 3'
        ]);

        // Job Form 2 Options

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 11,
            'option'                        => 'Job Form 3 > Question 1 > Checkbox Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 11,
            'option'                        => 'Job Form 3 > Question 1 > Checkbox Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 11,
            'option'                        => 'Job Form 3 > Question 1 > Checkbox Option 3'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 12,
            'option'                        => 'Job Form 3 > Question 2 > Dropdown Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 12,
            'option'                        => 'Job Form 3 > Question 2 > Dropdown Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 12,
            'option'                        => 'Job Form 3 > Question 2 > Dropdown Option 3'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 13,
            'option'                        => 'Job Form 3 > Question 3 > Radio Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 13,
            'option'                        => 'Job Form 3 > Question 3 > Radio Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 3,
            'job_form_question_id'          => 13,
            'option'                        => 'Job Form 3 > Question 3 > Radio Option 3'
        ]);


    }
}
