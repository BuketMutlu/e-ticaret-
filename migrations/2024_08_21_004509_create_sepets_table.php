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
        Schema::create('sepets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Hangi kullanıcının beğendiğini saklamak için
            $table->unsignedBigInteger('urun_id'); // Hangi ürünü beğendiğini saklamak için
            $table->integer('adet')->default(1); // Adet sütunu
            $table->timestamps();


              // user_id ve urun_id'yi sırasıyla users ve urunler tablolarına bağlar
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
              $table->foreign('urun_id')->references('id')->on('urunlers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sepets');
    }
};
