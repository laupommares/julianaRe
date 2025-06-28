<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    protected $model = \App\Models\Recipe::class;

    public function definition()
    {
        $title = $this->faker->word();

        return [
            'title' => fake()->realText(50),
            'slug' => Str::slug(fake()->realText(50)), // Generamos un slug para el título
            'description' => $this->faker->paragraph(),
            'ingredients' => $this->faker->sentence(),
            'instructions' => $this->faker->paragraph(),
            'image' => fake()->imageUrl(), // 🔹 Imagen aleatoria de comida
        ];
    }
}
