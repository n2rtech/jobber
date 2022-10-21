<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table        = 'products';

    protected $fillable     = ['type' ,'name', 'description', 'tax_rates', 'unit_price'];

    public $timestamps      = true;

    protected $casts        = [
        'tax_rates' => 'array',
    ];
}
