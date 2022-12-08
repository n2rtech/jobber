<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextTemplateContent extends Model
{
    use HasFactory;

    protected $table        = 'text_template_content';

    protected $fillable     = ['text_template_id', 'template_name', 'message', 'status'];

    public function template()
    {
        return $this->belongsTo(TextTemplate::class);
    }

    public $timestamps      = true;
}
