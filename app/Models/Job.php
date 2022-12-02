<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table        = 'jobs';

    protected $fillable     = ['customer_id', 'job_title_id', 'user_id', 'instructions', 'invoice_remind', 'job_forms', 'scheduled', 'start', 'end', 'total'];

    public $timestamps      = true;

    protected $casts        = [
        'job_forms' => 'array',
    ];

    public function products()
    {
        return $this->hasMany(JobProduct::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }
    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'job_id');
    }

    public function subject($job_id)
    {
        $template = EmailTemplate::where('type', 'jobs')->where('mode', 'confirmation')->value('subject');
        $subject  = getSubject($template, $job_id);
        return $subject;
    }

    public function message($job_id)
    {
        $template = EmailTemplate::where('type', 'jobs')->where('mode', 'confirmation')->value('message');
        $message  = getMessage($template, $job_id);
        return $message;
    }
}
