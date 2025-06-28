<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; 

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->realText(50),
            'slug' => Str::slug(fake()->realText(50)), // Generamos un slug para el título
            'description' => fake()->realText(150), // Descripción falsa
            'content' => fake()->realText(500), // Contenido
            'image' => fake()->imageUrl(), // URL de imagen falsa
        ];
    }
}