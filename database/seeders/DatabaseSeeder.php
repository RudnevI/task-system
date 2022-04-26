<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Project;
use App\Models\Task;
use App\Models\TaskInfo;
use App\Models\User;
use Database\Factories\JobFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public $modelClasses = [
        Job::class,
        Project::class,
        Task::class,
        TaskInfo::class,

    ];

    public function run()
    {
        foreach($this->modelClasses as $modelClass) {
            $modelClass::factory(40)->create();
        }
    }
}
