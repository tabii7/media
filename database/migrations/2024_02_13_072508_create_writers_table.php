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
        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id');
            $table->string('age');
            $table->string('gender');
            $table->string('about_yourself');
            $table->string('portfolio');
            $table->string('best_genre');
            $table->string('best_format');
            $table->string('best_language');
            $table->string('writing_speed');
            $table->string('inspirational_content');
            $table->string('favourite_writers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('writers');
    }
};
