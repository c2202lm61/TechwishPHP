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
        Schema::create('product_carts', function (Blueprint $table) {
            $table->id('ProductCartID');
            $table->integer('Quantity');
            $table->unsignedBigInteger('CartID');
            $table->unsignedBigInteger('Product_ID');
            $table->foreign('CartID')->references('CartID')->on('carts');
            $table->foreign('Product_ID')->references('Product_ID')->on('products');
            $table->unique(['CartID', 'Product_ID']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_carts');
    }
};