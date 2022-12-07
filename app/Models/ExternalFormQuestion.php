<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalFormQuestion extends Model
{
    use HasFactory;

    protected $table        = 'external_form_questions';

    protected $fillable     = ['external_form_id', 'external_form_tab_id', 'question', 'type'];

    public $timestamps      = true;

    public function form()
    {
        return $this->belongsTo(ExternalForm::class);
    }

    public function tab()
    {
        return $this->belongsTo(ExternalFormTab::class);
    }

    public function options()
    {
        return $this->hasMany(ExternalFormQuestionOption::class);
    }
}
