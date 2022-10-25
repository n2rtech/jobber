<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table        = 'invoices';

    protected $fillable     = ['customer_id', 'job_id', 'user_id', 'shipping_address', 'terms', 'due_date', 'invoice_date', 'discount', 'discount_type', 'tax', 'tax_type', 'total', 'notes', 'conditions', 'file'];

    public $timestamps      = true;

    public function products()
    {
        return $this->hasMany(InvoiceProduct::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
