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
        Schema::create('adreslers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // Kullanıcıyla ilişki
            $table->string('isim');
            $table->string('adres');
            $table->string('telefon');
            $table->timestamps();


             // user_id ile users tablosu arasında ilişki kurar
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adreslers');
    }
};
