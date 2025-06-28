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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('image');      // Imagen asociada
            $table->string('slug')->unique();
            $table->string('title');  // Nombre de la receta
            $table->text('description');  // Descripción de la receta
            $table->text('ingredients');  // Ingredientes de la receta
            $table->text('instructions');  // Instrucciones para preparar la receta
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
