<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('location_vendors', function (Blueprint $table) {
            $table->id();
            $table->string('location_name');
            $table->string('locations_address');
            $table->text('locations_summary'); 
            $table->string('locations_electricity_cost'); 
            $table->string('locations_voltage');
            $table->string('locations_load_shut_down_timing');
            $table->string('locations_rent_per_day');
            $table->string('time_of_availability');
            $table->string('near_by_market');
            $table->string('near_by_hospital');
            $table->string('near_by_petrol_pump');
            $table->json('locations_pics')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_vendors');
    }
};
