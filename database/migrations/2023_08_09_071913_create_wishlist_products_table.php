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
        Schema::create('wishlist_products', function (Blueprint $table) {
            $table->id('WishlistProductID');
            $table->unsignedBigInteger('WishlistID');
            $table->unsignedBigInteger('Product_ID');
            $table->foreign('WishlistID')->references('WishlistID')->on('wishlists');
            $table->foreign('Product_ID')->references('Product_ID')->on('products');
            $table->unique(['WishlistID', 'Product_ID']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlist_products');
    }
};