<?php
namespace Database\Seeders;

use App\Models\Article; // No necesitas importar User si no lo usas
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Si no necesitas usar User, puedes eliminar estas líneas:
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Crear 50 artículos de ejemplo
        Article::factory()
            ->count(50)
            ->create();
    }
}
