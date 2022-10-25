<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPhoto extends Model
{

    use HasFactory;

    protected $table        = 'customer_photos';

    protected $fillable     = ['customer_id', 'image'];

    public $timestamps      = true;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
