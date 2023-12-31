<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{
    use HasFactory;

    protected $table        = 'job_titles';

    protected $fillable     = ['title'];

    public $timestamps      = true;

    public function job()
    {
        return $this->hasMany(Job::class);
    }
}
