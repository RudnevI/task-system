<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Service\ResourceService;

class ResourceController extends Controller
{




    public function getAdminPageView() {



    return view('AdminPAge', ResourceService::getDataForAdminPage());
    }

    public function getDevPersonalStatisticsView() {
        return view('DevPersonalStatistics');
    }

    public function getManagerPersonalStatisticsView() {
        return view('ManagerPersonalStatistics');
    }

    public function getPersonalTasksPageView($userId) {
        return view('PersonalTasksPage');
    }






}
