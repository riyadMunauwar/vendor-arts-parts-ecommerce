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
        Schema::create('caurosels', function (Blueprint $table) {
            $table->id();
            $table->string('image_link', 2048)->nullabel();
            $table->json('title')->nullabel();
            $table->json('subtitle')->nullabel();
            $table->json('text')->nullabel();
            $table-json('button_one_text')->nullabel();
            $table->json('button_two_text')->nullabel();
            $table->string('button_one_link', 2048)->nullabel();
            $table->string('button_two_link', 2048)->nullabel();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caurosels');
    }
};
