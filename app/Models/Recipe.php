<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    
    protected $fillable = ['image','title', 'slug', 'description', 'ingredients', 'instructions', 'published', 'notifications'];

    protected $casts = [
        'published' => 'boolean',
        'notifications' => 'array',
    ];
}
