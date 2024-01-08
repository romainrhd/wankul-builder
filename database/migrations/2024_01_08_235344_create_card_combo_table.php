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
        Schema::create('card_combo', function (Blueprint $table) {
            $table->foreignId('card_id')->constrained();
            $table->foreignId('combo_id')->constrained();
            $table->primary(['card_id', 'combo_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_combo');
    }
};
