<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobProduct extends Model
{
    use HasFactory;

    protected $table        = 'job_products';

    protected $fillable     = ['job_id', 'product_id', 'description','quantity', 'unit_price', 'total'];

    public $timestamps      = true;

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}