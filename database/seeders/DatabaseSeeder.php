<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use Database\Factories\ProjectFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Project::factory(90)->create();
        Task::factory(100)->create();
    }
}
