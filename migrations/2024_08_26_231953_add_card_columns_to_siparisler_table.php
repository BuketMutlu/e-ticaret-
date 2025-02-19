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
            $table->string('card_name')->nullable();
            $table->string('card_number')->nullable();
            $table->string('expire_month')->nullable();
            $table->string('expire_year')->nullable();
            $table->string('cvc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siparislers', function (Blueprint $table) {
            $table->dropColumn(['card_name', 'card_number', 'expire_month', 'expire_year', 'cvc']);

        });
    }
};
