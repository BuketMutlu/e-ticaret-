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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 10, 2); // Toplam fiyat
            $table->decimal('paidPrice', 10, 2); // Ödenen fiyat
            $table->string('currency'); // Para birimi
            $table->integer('installment'); // Taksit sayısı
            $table->string('basketId'); // Sepet ID
            $table->string('paymentChannel'); // Ödeme kanalı
            $table->string('paymentGroup'); // Ödeme grubu
            $table->string('card_name'); // Kart sahibi
            $table->string('card_number'); // Kart numarası
            $table->string('expire_month'); // Son kullanma ayı
            $table->string('expire_year'); // Son kullanma yılı
            $table->string('cvc'); // CVC kodu
            $table->text('order_note')->nullable(); // Sipariş notu
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
