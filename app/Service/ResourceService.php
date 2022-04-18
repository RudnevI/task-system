<?php

namespace App\Service;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class ResourceService {

    public static function getDataForAdminPage() {
        $entities = [Task::class, User::class, Project::class];
        $dataArray = [];
        foreach($entities as $entity) {
            $dataArray += [strtolower(class_basename($entity)).'s' => CommonModelService::getPaginatedResult($entity)];
        }
        return $dataArray;
    }

    public static function getPersonalTasksViewData($userId) {

    }
}
