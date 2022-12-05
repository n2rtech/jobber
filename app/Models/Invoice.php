<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table        = 'invoices';

    protected $fillable     = ['customer_id', 'job_id', 'user_id', 'same_as_billing_address', 'shipping_address_1', 'shipping_address_2', 'shipping_city', 'shipping_state', 'shipping_country', 'shipping_eir_code', 'terms', 'due_date', 'invoice_date', 'discount', 'discount_type', 'tax', 'tax_type', 'total', 'notes', 'conditions', 'file'];

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

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
