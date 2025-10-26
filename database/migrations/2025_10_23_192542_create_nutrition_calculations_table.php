<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nutrition_calculations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('usia');
            $table->float('berat');
            $table->float('tinggi');
            $table->string('kelamin');
            $table->integer('kalori');
            $table->integer('protein');
            $table->integer('karbohidrat');
            $table->integer('lemak');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nutrition_calculations');
    }
};
