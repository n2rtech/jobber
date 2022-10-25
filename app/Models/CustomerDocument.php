<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDocument extends Model
{

    use HasFactory;

    protected $table        = 'customer_documents';

    protected $fillable     = ['customer_id', 'document'];

    public $timestamps      = true;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
