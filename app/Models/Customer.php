<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory, Notifiable;

    public function allnotes()
    {
        return $this->hasMany(CustomerNote::class)->orderBy('id', 'desc');
    }

    public function photos()
    {
        return $this->hasMany(CustomerPhoto::class)->orderBy('id', 'desc');
    }

    public function documents()
    {
        return $this->hasMany(CustomerDocument::class)->orderBy('id', 'desc');
    }

    public function sentEmails()
    {
        return $this->hasMany(SentEmail::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class)->orderBy('id', 'desc');
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class)->whereNot('total', '0.00')->orderBy('id', 'desc');
    }
    public function estimates()
    {
        return $this->hasMany(Estimate::class)->orderBy('id', 'desc');
    }

    public function jobnotes()
    {
        return $this->hasMany(JobNote::class)->orderBy('id', 'desc');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function banh()
    {
        return $this->hasMany(Banh::class)->orderBy('id', 'desc');
    }


}
