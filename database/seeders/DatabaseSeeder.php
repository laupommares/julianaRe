<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Article;
use App\Models\Recipe;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuarios fijos (nutricionista y programadora)
        User::updateOrCreate(
            ['email' => 'julianarecoach@gmail.com'],
            [
                'name' => 'Juliana',
                'last_name' => 'Re',
                'password' => Hash::make('nutri1234'),
                'role' => 'admin'
            ]
        );

        User::updateOrCreate(
            ['email' => 'laurapommares@gmail.com'],
            [
                'name' => 'Laura',
                'last_name' => 'Pommarés',
                'password' => Hash::make('programadora1234'),
                'role' => 'admin'
            ]
        );

        // Sembrar artículos
        Article::factory()->count(50)->create();

        // Sembrar recetas
        Recipe::factory()->count(20)->create();
    }
}
