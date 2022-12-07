<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalForm extends Model
{
    use HasFactory;

    protected $table        = 'external_forms';

    protected $fillable     = ['title', 'slug', 'type'];

    public $timestamps      = true;

    public function tabs()
    {
        return $this->hasMany(ExternalFormTab::class);
    }

    public function questions()
    {
        return $this->hasMany(ExternalFormQuestion::class);
    }

}
