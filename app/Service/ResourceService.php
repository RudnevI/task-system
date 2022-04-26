<?php

namespace App\Service;


use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Service\CommonModelService;


class ResourceService {

    // public static function getDataForAdminPage() {
    //     $nameModelMap = ['users' => User::class, 'tasks' => Task::class, 'projects' => Project::class];
    //     $data = [];

    //     foreach(array_keys($nameModelMap) as $nameModelKey) {
    //         $data += [$nameModelKey => CommonModelService::getPaginatedResult($nameModelMap[$nameModelKey])];
    //     }
    //     return $data;
    // }


    public static function getDataForAdminPage() {
        return ['projects' => Project::with('tasks')->paginate(20), 'users' => User::paginate(20), 'tasks' => Task::with('project', 'user')->paginate(20)];
    }

    public static function getUserAdminPageWithData() {
        return view('admin-users',  ['users' => User::orderBy('id', 'desc')->paginate(20)]);
    }

    public static function getTaskAdminPageWithData() {
        return view('admin-tasks', ['tasks' => Task::with('project', 'user')->orderBy('id', 'desc')->paginate(20)]);
    }

    public static function getProjectPageWithData() {
        return view('admin-projects', ['projects' => Project::with('tasks')->orderBy('id', 'desc')->paginate(20)]);
    }

    public static function getUserCreationForm() {
        return view('admin-create-user');
    }

    public static function getTaskCreationForm() {
        return view('admin-create-task', ['projects' => Project::all(), 'tasks' => Task::all(), 'users' => User::all()]);
    }

    public static function getProjectCreationForm() {
        return view('admin-create-project');
    }

    public static function getUserUpdateForm($id) {


        return view('admin-update-user', ['user' => User::find($id)]);
    }

    public static function getTaskUpdateForm($id) {
        return view('admin-update-task', ['projects' => Project::all(), 'users' => User::all(), 'task' => Task::find($id)]);
    }

    public static function getProjectUpdateForm($id) {
        return view('admin-update-project', ['project' => Project::find($id)]);
    }
}
