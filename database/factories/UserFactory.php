<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        return [
            'title' => fake()->realText(50),
            'slug' => fake()->slug,
            'description' => fake()->sentence,
            'content' => fake()->realText(500),
            'image' => fake()->imageUrl(),
        ];
    }
}
