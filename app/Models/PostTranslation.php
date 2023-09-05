<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'post_id', 'locale', 'title', 'content', 'smallDesc'];
}
