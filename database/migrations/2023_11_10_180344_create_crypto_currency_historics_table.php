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
        Schema::create('crypto_currency_historics', function (Blueprint $table) {
            $table->id();
            $table->string('crypto_currency_id');
            $table->timestamp('date');
            $table->decimal('price');
            $table->decimal('market_cap');
            $table->integer('volume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crypto_currency_historics');
    }
};
