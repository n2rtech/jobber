<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table        = 'products';

    protected $fillable     = ['type' ,'name', 'description', 'tax_rate_id', 'unit_price'];

    public $timestamps      = true;

    public function tax()
    {
        return $this->belongsTo(TaxRate::class, 'tax_rate_id');
    }

    public function invoices()
    {
        return $this->hasOne(InvoiceProduct::class);
    }

    public function estimates()
    {
        return $this->hasOne(EstimateProduct::class);
    }
}
