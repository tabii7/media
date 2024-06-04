<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationVendor extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'location_name',
        'locations_address',
        'locations_summary',
        'locations_pics',
        'locations_electricity_cost',
        'locations_voltage',
        'locations_load_shut_down_timing',
        'locations_rent_per_day',
        'time_of_availability',
        'near_by_market',
        'near_by_hospital',
        'near_by_petrol_pump',
    ];

    protected $casts = [
        'locations_pics' => 'array',
    ];
}
