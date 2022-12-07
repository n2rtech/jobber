<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalFormTab extends Model
{
    use HasFactory;

    protected $table        = 'external_form_tabs';

    protected $fillable     = ['external_form_id', 'tab'];

    public $timestamps      = true;

    public function form()
    {
        return $this->belongsTo(ExternalForm::class);
    }

    public function questions()
    {
        return $this->hasMany(ExternalFormQuestion::class);
    }

}
