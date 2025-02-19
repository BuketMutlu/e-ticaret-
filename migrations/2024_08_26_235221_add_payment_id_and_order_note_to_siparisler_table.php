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
        Schema::table('siparislers', function (Blueprint $table) {
            $table->string('payment_id')->nullable()->after('cvc'); // `cvc` sütunundan sonra ekleyin
            $table->text('order_note')->nullable()->after('payment_id'); // `payment_id` sütunundan sonra ekleyin
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siparislers', function (Blueprint $table) {
            $table->dropColumn('payment_id');
            $table->dropColumn('order_note');
        });
    }
};
