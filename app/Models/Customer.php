<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

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
        return $this->hasMany(sentEmail::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class)->orderBy('id', 'desc');
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class)->orderBy('id', 'desc');
    }
    public function estimates()
    {
        return $this->hasMany(Estimate::class)->orderBy('id', 'desc');
    }

    public function jobnotes()
    {
        return $this->hasMany(JobNote::class)->orderBy('id', 'desc');
    }


}
