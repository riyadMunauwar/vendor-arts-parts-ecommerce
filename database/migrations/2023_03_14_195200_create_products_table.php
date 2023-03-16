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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500);
            $table->string('slug', 600);
            $table->float('regular_price')->nullable();
            $table->float('sale_price');
            $table->string('sku')->nullable();
            $table->integer('stock_qty');
            $table->integer('rating')->nullable();
            $table->integer('total_review')->nullable();
            $table->string('weight_unit')->nullalbe();
            $table->float('weight')->nullable();
            $table->string('dimension_unit')->nullalbe();
            $table->float('length')->nullable();
            $table->float('width')->nullable();
            $table->float('heigth')->nullable();
            $table->text('compatibility')->nullable();
            $table->text('features')->nullable();
            $table->text('description')->nullable();
            $table->string('special_bedge')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_premium')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
