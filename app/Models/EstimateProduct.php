<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimateProduct extends Model
{
    use HasFactory;

    protected $table        = 'estimate_products';

    protected $fillable     = ['estimate_id', 'product_id', 'description','quantity', 'unit_price', 'total'];

    public $timestamps      = true;

    public function estimate()
    {
        return $this->belongsTo(Estimate::class);
    }
}
