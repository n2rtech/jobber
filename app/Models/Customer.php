<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function allnotes()
    {
        return $this->hasMany(CustomerNote::class);
    }

    public function photos()
    {
        return $this->hasMany(CustomerPhoto::class);
    }

    public function documents()
    {
        return $this->hasMany(CustomerDocument::class);
    }

    public function sentEmails()
    {
        return $this->hasMany(sentEmail::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    public function estimates()
    {
        return $this->hasMany(Estimate::class);
    }

    public function jobnotes()
    {
        return $this->hasMany(JobNote::class);
    }

}
