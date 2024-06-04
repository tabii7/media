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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('products');
            $table->text('product_summery');
            $table->string('Product_weight');
            $table->decimal('product_rent_per_day', 8, 2);
            $table->string('time_of_availability');
            $table->string('location');
            $table->json('product_pics')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
