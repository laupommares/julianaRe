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
        Schema::table('articles', function (Blueprint $table) {
            $table->text('description')->nullable()->change(); // Permitir valores nulos
            $table->text('content')->nullable()->change(); // Permitir valores nulos
            $table->string('image')->nullable()->change(); // Permitir valores nulos
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->text('description')->nullable()->change(); // Volver a permitir NULL
            $table->text('content')->nullable()->change(); // Volver a permitir NULL
            $table->string('image')->nullable()->change(); // Volver a permitir NULL
        });
    }
};
