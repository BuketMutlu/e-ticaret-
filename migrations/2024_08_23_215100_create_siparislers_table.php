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
        Schema::create('siparislers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kullanıcıyı referans alıyoruz
            $table->string('isim');
            $table->string('soyisim');

            $table->string('adres');

            $table->string('email');
            $table->string('card_name')->nullable();
            $table->string('card_number')->nullable();
            $table->string('expire_month', 2)->nullable();
            $table->string('expire_year', 4)->nullable();
            $table->string('cvc', 3)->nullable();
            $table->string('payment_id')->nullable();

            $table->timestamps();

    // Kullanıcı ID'sine yabancı anahtar ekleyelim
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siparislers');
    }
};
