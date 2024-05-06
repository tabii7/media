<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'age',
        'gender',
        'pronouns',
        'sexuality',
        'height',
        'body_type',
        'body_art',
        'birthmark',
        'scar',
        'hair_color',
        'features',
        'eye_color',
        'relationship_status',
        'occupation',
        'residence',

    ];
}
