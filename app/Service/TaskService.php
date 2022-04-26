<?php

namespace App\Service;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskService {
    public static function getFilteredData($data) {


        if($data['deadline'] !== null) {
            $time = strtotime($data['deadline']);
            $data['deadline']= date('Y/m/d', $time);

        }

        if($data['project_id'] !== null) {
            $data['project_id'] = intval($data['project_id']);
        }

        // dd(Task::with('project')->get());
        // dd(Task::where('project_id', '=', $data['project_id'])->get());
        return Project::with('tasks')->whereRelation('tasks', 'user_id', Auth::id())->whereHas('tasks', function($query) use($data) {
            return $query->where('project_id', '=', $data['project_id']);
        })->orWhereHas('tasks', function($query) use($data) {
            return $query->where('deadline', '=' , $data['deadline']);
        })->paginate(20);



    }

    public static function search($name) {

        return Project::with('tasks')->whereRelation('tasks', 'user_id', Auth::id())->where('name', 'like', '%'.$name.'%')->orWhereHas('tasks', function($query) use($name) {
            $query->where('name', 'like', '%'.$name.'%');
        })->paginate(20);

        // return Task::with('project')->where('name', 'like', '%'.$name.'%')->orWhereHas('project', function($query) use($name) {
        //     $query->where('name', 'like', '%'.$name.'%');
        // })->paginate(20);
    }


}
