<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'content', 'image', 'published', 'notifications'
    ];

    protected $casts = [
        'published' => 'boolean',
        'notifications' => 'array',
    ];
}
