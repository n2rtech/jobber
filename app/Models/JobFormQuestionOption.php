<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobFormQuestionOption extends Model
{
    use HasFactory;

    protected $table        = 'job_form_question_options';

    protected $fillable     = ['job_form_id', 'job_form_question_id', 'option'];

    public $timestamps      = true;

    public function question()
    {
        return $this->belongsTo(JobFormQuestion::class);
    }

}
