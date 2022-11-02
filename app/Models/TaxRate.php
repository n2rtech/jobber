<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRate extends Model
{
    use HasFactory;

    protected $table        = 'tax_rates';

    protected $fillable     = ['name', 'rate'];

    public $timestamps      = true;

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
