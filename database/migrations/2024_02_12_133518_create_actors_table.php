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

        
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id');
            $table->string('age'); 
            $table->string('gender'); 
            $table->string('pronouns'); 
            $table->string('sexuality'); 
            $table->string('height'); 
            $table->string('body_type'); 
            $table->string('body_art'); 
            $table->string('birthmark'); 
            $table->string('scar'); 
            $table->string('hair_color'); 
            $table->string('features'); 
            $table->string('eye_color'); 
            $table->string('relationship_status'); 
            $table->string('occupation'); 
            $table->string('residence'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actors');
    }
};
