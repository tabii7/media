<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'age',
        'gender',
        'about_yourself',
        'portfolio',
        'best_genre',
        'best_format',
        'best_language',
        'writing_speed',
        'inspirational_content',
        'favourite_writers',
    ];
}
