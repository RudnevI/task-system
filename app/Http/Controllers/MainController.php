<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class MainController extends Controller
{
        public function managerStatistics()
        {
            $statistic = Task::with('project' , 'user' , 'taskInfo.job')->get();
            return response()->json($statistic, 201);
        }

        public function personalStatistics()
        {
            $statistic = Task::with('project' , 'user' , 'taskInfo.job')->where('user_id' , Auth::id())->get();
            return response()->json($statistic, 201);
        }
}
