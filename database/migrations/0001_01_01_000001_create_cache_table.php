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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // Clave primaria autoincremental
            $table->string('nombre', 100); // Columna 'nombre'
            $table->string('apellido', 100); // Columna 'apellido'
            $table->string('rut', 20); // Columna 'rut'
            $table->timestamps(); // Columna 'created_at' y 'updated_at'
        });
    }
    
};
