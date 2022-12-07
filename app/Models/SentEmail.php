<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentEmail extends Model
{
    use HasFactory;

    protected $table        = 'sent_emails';

    protected $fillable     = ['customer_id', 'user_id','email', 'medium', 'type', 'mode', 'subject', 'message', 'text', 'attachments', 'custom_id'];

    public $timestamps      = true;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
