<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'shop_name',
        'products',
        'product_summery',
        'Product_weight',
        'product_rent_per_day',
        'time_of_availability',
        'location',
        'product_pics',
    ];

    protected $casts = [
        'product_pics' => 'array',
    ];
}
