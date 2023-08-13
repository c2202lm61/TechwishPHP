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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id('WishlistID');
            $table->unsignedBigInteger('UserID');
            $table->foreign('UserID')->references('UserID')->on('users');
            $table->unsignedBigInteger('Product_ID');
            $table->foreign('Product_ID')->references("Product_ID")->on('products');
<<<<<<< HEAD
            $table->foreign('Product_ID')->references('Product_ID')->on('products');
            $table->unique(['WishlistID', 'Product_ID']);
=======
>>>>>>> 824b59c43afde2fdde76b6893713526e7cb8850e
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
