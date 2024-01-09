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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('name');
            $table->string('image');
            $table->boolean('published')->default(false);
            $table->foreignId('illustrator_id')->unsigned()->nullable();
            $table->foreignId('rarety_id')->unsigned()->nullable();
            $table->foreignId('expansion_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
