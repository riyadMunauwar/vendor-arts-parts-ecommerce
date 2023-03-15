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
        Schema::create('feature_boxes', function (Blueprint $table) {
            $table->id();
            $table->string('sup_title', 500)->nullalbe();
            $table->string('title', 500)->nullalbe();
            $table->string('sub_title', 500)->nullalbe();
            $table->strign('button_text')->nullalbe();
            $table->strign('button_link')->nullalbe();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('product_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_boxes');
    }
};
