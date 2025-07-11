<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
        'title' => fake()->sentence(3),
        'description' => fake()->sentence(),
        'long_description' => fake()->optional->paragraph(),
        'completed' => fake()->boolean
        ];
    }
}
