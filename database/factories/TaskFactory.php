<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
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
    public function definition()
    {
        return [
            'name' => $this->faker->text(),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomElement(['todo', 'inprogress', 'completed']),
            'deadline' => $this->faker->date(),
            'project_id' => Project::factory()->create()->id,
            'user_id' => User::factory()->create()->id
        ];
    }
}
