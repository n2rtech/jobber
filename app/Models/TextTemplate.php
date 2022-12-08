<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextTemplate extends Model
{
    use HasFactory;

    protected $table        = 'text_templates';

    protected $fillable     = ['type', 'mode'];

    public function contents()
    {
        return $this->hasMany(TextTemplateContent::class);
    }

    public $timestamps      = true;
}
