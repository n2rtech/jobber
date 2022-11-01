<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobNote extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table        = 'job_notes';

    protected $fillable     = ['job_id', 'customer_id', 'user_id', 'note', 'file'];

    public $timestamps      = true;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
