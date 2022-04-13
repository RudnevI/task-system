<?php

use App\Models\Project;
use App\Models\Task;
use App\Service\TaskService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//start test block
Route::get('/projects', function () {
    return Project::all();
});
Route::get('/tasks', function () {
    return Task::all();
});

Route::get('/get-filtered-tasks', function (Request $request) {

    $data = $request->all();

    return TaskService::getFilteredTasks($data);
});
//end test block
/* TODO: Убрать тестовые методы */
