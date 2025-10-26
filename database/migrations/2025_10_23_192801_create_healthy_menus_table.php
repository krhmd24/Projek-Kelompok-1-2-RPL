<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('healthy_menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->text('deskripsi');
            $table->integer('kalori')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('healthy_menus');
    }
};
