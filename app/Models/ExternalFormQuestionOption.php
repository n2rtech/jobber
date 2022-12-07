<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalFormQuestionOption extends Model
{
    use HasFactory;

    protected $table        = 'external_form_question_options';

    protected $fillable     = ['external_form_id', 'external_form_tab_id', 'external_form_question_id', 'option'];

    public $timestamps      = true;

    public function question()
    {
        return $this->belongsTo(ExternalFormQuestion::class);
    }
}
