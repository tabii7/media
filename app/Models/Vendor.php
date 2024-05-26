<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shop_name',
        'products',
        'product_summary',
        'product_pics',
        'product_weight',
        'product_rent_per_day',
        'time_of_availability',
        'location',
    ];

    protected $casts = [
        'product_pics' => 'array',
    ];
}
