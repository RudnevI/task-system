<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Service\ResourceService;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $projects = Project::with('tasks.taskInfos')->whereRelation('tasks', 'user_id', Auth::id())->get();
        // dd($projects);
        return view('PersonalTasksPage', $projects);
        // return view('PersonalTasksPage');
    }

    public function adminPanel() {
        return view('AdminPAge', ResourceService::getDataForAdminPage());
    }
}
