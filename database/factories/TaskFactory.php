<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
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
            "title" => $this->faker->sentence(),
            "description" => $this->faker->paragraph(),
            "priority" => $this->faker->randomElement(['low', 'medium', 'high']),
            "user_id" => \App\Models\User::factory(),
            "category_id" => \App\Models\Category::first("id"),
            "completed_at" => $this->faker->optional()->dateTime(),
            "archived_at" => $this->faker->optional()->dateTime(),
            "due_at" => $this->faker->optional()->dateTime(),
            "is_starred" => $this->faker->boolean(),
        ];
    }
}
