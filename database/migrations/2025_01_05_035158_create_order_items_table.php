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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('order_id'); // Foreign Key a pedidos
            $table->unsignedBigInteger('product_id'); // Foreign Key a productos
            $table->integer('quantity'); // Cantidad de productos
            $table->decimal('price', 10, 2); // Precio del producto al momento del pedido
            $table->timestamps(); // created_at y updated_at

            // Claves foráneas
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
