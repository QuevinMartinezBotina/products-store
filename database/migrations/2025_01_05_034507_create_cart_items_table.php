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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('cart_id'); // Foreign Key a carritos
            $table->unsignedBigInteger('product_id'); // Foreign Key a productos
            $table->integer('quantity'); // Cantidad de productos
            $table->timestamps(); // created_at y updated_at

            // Claves foráneas
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
