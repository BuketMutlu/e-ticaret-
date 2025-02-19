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
        Schema::create('iletisims', function (Blueprint $table) {
                $table->id();
                $table->string('isim');
                $table->string('email');
                $table->string('konu');
                $table->string('telefonno')->nullable();
                $table->text('mesaj');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iletisims');
    }
};
