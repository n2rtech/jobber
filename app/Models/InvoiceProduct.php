<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceProduct extends Model
{
    use HasFactory;

    protected $table        = 'invoice_products';

    protected $fillable     = ['invoice_id', 'product_id', 'description','quantity', 'unit_price', 'tax_rate', 'tax_amount','total'];

    public $timestamps      = true;

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
