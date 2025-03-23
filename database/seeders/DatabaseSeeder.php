<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Recipe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Sembrar artículos
        Article::factory()->count(50)->create();

        // Sembrar recetas directamente aquí
        Recipe::factory()->count(20)->create();
    }
}

