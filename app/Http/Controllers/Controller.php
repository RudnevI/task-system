<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Project;

use App\Service\ResourceService;

use App\Service\TaskService;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $projects = Project::with('tasks.taskInfos')->whereRelation('tasks', 'user_id', Auth::id())->paginate(20);
        // $projects = Project::with('tasks')->whereRelation('tasks', 'user_id', Auth::id())->get();
        // $projects = Project::with('tasks')->paginate(20);
        return view('PersonalTasksPage')->with(['projects' => $projects]);
    }

    public function filteredIndex(Request $request) {

        return view('PersonalTasksPage')->with(['projects' => TaskService::getFilteredData($request->all())]);
    }


    public function search(Request $request) {
        return view('PersonalTasksPage')->with(['projects' => TaskService::search($request['name'])]);
    }

    public function adminPanel() {
        return view('AdminPAge', ResourceService::getDataForAdminPage());
    }
}
