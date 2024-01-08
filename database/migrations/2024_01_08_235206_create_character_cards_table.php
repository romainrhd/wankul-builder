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
        Schema::create('character_cards', function (Blueprint $table) {
            $table->id();
            $table->integer('cost');
            $table->integer('power');
            $table->longText('effect_text');
            $table->longText('story_text');
            $table->foreignId('card_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_cards');
    }
};
