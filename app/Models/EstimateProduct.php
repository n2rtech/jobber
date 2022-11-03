<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimateProduct extends Model
{
    use HasFactory;

    protected $table        = 'estimate_products';

    protected $fillable     = ['estimate_id', 'product_id', 'description','quantity', 'unit_price', 'tax_rate', 'total'];

    public $timestamps      = true;

    public function estimate()
    {
        return $this->belongsTo(Estimate::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
