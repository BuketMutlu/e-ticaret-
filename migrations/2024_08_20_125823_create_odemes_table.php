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
        Schema::create('odemes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // Kullanıcıyla ilişki
            $table->string('kart_numarasi'); // Kart numarası
            $table->string('sonkullanma_tarihi'); // Son kullanma tarihi
            $table->string('cvv'); // CVV
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odemes');
    }
};
