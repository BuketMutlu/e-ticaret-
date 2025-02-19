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
        Schema::create('urunlers', function (Blueprint $table) {
            $table->id();
            $table->string('urunadi')->nullable();
            $table->text('fiyat')->nullable();
            $table->text('resim')->nullable();
            $table->text('aciklama')->nullable();
            $table->text('aresim1')->nullable();
            $table->text('aresim2')->nullable();
            $table->text('aresim3')->nullable();
            $table->string('ozel_gun')->nullable(); // Özel Günler için
            $table->string('boyut')->nullable();
            $table->string('kategori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urunlers');
    }
};
