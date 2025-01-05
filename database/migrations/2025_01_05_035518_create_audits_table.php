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
        Schema::create('audits', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('user_id'); // Foreign Key a usuarios
            $table->string('action'); // Acción realizada (ej. 'create', 'update', 'delete')
            $table->string('table_name'); // Tabla afectada
            $table->unsignedBigInteger('record_id'); // ID del registro afectado
            $table->timestamp('timestamp'); // Fecha y hora de la acción
            $table->timestamps(); // created_at y updated_at

            // Clave foránea
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audits');
    }
};
