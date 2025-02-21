<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    protected $model = \App\Models\Recipe::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'slug' => fake()->slug,
            'description' => $this->faker->paragraph(),
            'ingredients' => $this->faker->sentence(),
            'instructions' => $this->faker->paragraph(),
        ];
    }
}
