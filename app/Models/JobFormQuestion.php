<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobFormQuestion extends Model
{
    use HasFactory;

    protected $table        = 'job_form_questions';

    protected $fillable     = ['job_form_id', 'question', 'type'];

    public $timestamps      = true;

    public function form()
    {
        return $this->belongsTo(JobForm::class);
    }

    public function options()
    {
        return $this->hasMany(JobFormQuestionOption::class);
    }
}
