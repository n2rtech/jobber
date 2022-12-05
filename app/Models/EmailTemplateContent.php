<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplateContent extends Model
{
    use HasFactory;

    protected $table        = 'email_template_content';

    protected $fillable     = ['email_template_id', 'template_name', 'subject', 'message', 'status'];

    public function template()
    {
        return $this->belongsTo(EmailTemplate::class);
    }

    public $timestamps      = true;
}
