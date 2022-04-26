<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaskInfo>
 */
class TaskInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'time_start' => $this->faker->dateTime(),
            'time_end' => $this->faker->dateTime(),
            'comment' => $this->faker->text(),
            'job_id' => Job::factory()->create()->id
        ];
    }
}
