<?php

use App\Models\Project;
use App\Models\Task;

class TaskService {
    public static function search($name) {

        return array_merge(Task::where('name', '=', $name)->get(), Project::where('name', '=', $name)->get());
    }
}
