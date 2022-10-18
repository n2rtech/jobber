<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobForm extends Model
{
    use HasFactory;

    protected $table        = 'job_forms';

    protected $fillable     = ['title'];

    public $timestamps      = true;

    public function questions()
    {
        return $this->hasMany(JobFormQuestion::class);
    }
}
