<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function notes()
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

    public function job()
    {
        return $this->hasMany(Job::class);
    }
    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

}
