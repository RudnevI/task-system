<?php

namespace App\Service;

use App\Models\Task;

class TaskService {
    public static function getFilteredTasks($data) {
        $parameters = ['project_id' => array_key_exists('projectId', $data) ? $data['projectId'] : null, 'deadline' =>  array_key_exists('deadline', $data) ? $data['deadline'] : null];
        $predicate = [];
        foreach(array_keys($parameters) as $parameterName) {
            if($parameters[$parameterName] !== null) {
                array_push($predicate, [$parameterName, '=', $parameters[$parameterName]]);
            }
        }
        return Task::where($predicate)->get();

    }

}
