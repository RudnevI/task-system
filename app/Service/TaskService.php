<?php

namespace App\Service;

use App\Models\Task;

class TaskService {
    public static function getFilteredTasks($projectId, $deadline) {
        $parameters = ['projectId' => $projectId, 'deadline' => $deadline];
        $predicate = [];
        foreach(array_keys($parameters) as $parameterName) {
            if($parameters[$parameterName] !== null) {
                array_push($predicate, [$parameterName, '=', $parameters[$parameterName]]);
            }
        }
        return Task::where($predicate)->get();

    }
    
}
