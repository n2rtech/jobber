<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobFormAnswer extends Model
{
    use HasFactory;



    protected $table        = 'job_form_answers';

    protected $fillable     = ['job_id', 'job_form_id', 'customer_id', 'job_form_question_id', 'answer', 'answer_options'];

    protected $casts = [
        'answer_options' => 'array',
    ];

    public $timestamps      = true;
}
