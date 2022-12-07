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

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 1,
            'option'                        => '1 Bar'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 1,
            'option'                        => '2 Bars'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 1,
            'option'                        => '3 Bars'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 1,
            'option'                        => '4 Bars'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 1,
            'option'                        => '5 Bars'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 2,
            'option'                        => '1 Bar'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 2,
            'option'                        => '2 Bars'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 2,
            'option'                        => '3 Bars'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 2,
            'option'                        => '4 Bars'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 2,
            'option'                        => '5 Bars'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 3,
            'option'                        => 'Vodafone'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 3,
            'option'                        => 'Three Mobile'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 3,
            'option'                        => 'Meteor'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 3,
            'option'                        => 'Virgin'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 1,
            'job_form_question_id'          => 3,
            'option'                        => 'Other'
        ]);

        //

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 4,
            'option'                        => 'Example Dropdown Question 1 Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 4,
            'option'                        => 'Example Dropdown Question 1 Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 4,
            'option'                        => 'Example Dropdown Question 1 Option 3'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 4,
            'option'                        => 'Example Dropdown Question 1 Option 4'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 4,
            'option'                        => 'Example Dropdown Question 1 Option 5'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 5,
            'option'                        => 'Example Radio Question 1 Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 5,
            'option'                        => 'Example Radio Question 1 Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 5,
            'option'                        => 'Example Radio Question 1 Option 3'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 5,
            'option'                        => 'Example Radio Question 1 Option 4'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 5,
            'option'                        => 'Example Radio Question 1 Option 5'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 6,
            'option'                        => 'Example Checkbox Question 2 Option 1'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 6,
            'option'                        => 'Example Checkbox Question 2 Option 2'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 6,
            'option'                        => 'Example Checkbox Question 2 Option 3'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 6,
            'option'                        => 'Example Checkbox Question 2 Option 4'
        ]);

        JobFormQuestionOption::create([
            'job_form_id'                   => 2,
            'job_form_question_id'          => 6,
            'option'                        => 'Example Checkbox Question 2 Option 5'
        ]);

    }
}
