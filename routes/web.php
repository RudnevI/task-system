<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\UserController;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use App\Service\ResourceService;
use App\Service\TaskService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application- These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group- Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', [Controller::class, 'index']);
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/filtered', [Controller::class, 'filteredIndex'])->name('index.filter');
    Route::get('/search', [Controller::class, 'search'])->name('index.search');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

// Route::get('/search', function() {
//     return TaskService::search('nobis');
// });

// Route::get('/tasks', function() {
//     return Task::all();
// });

// Route::get('projects', function() {
//     return Project::all();
// });


Route::get('admin-panel', [Controller::class, 'adminPanel']);
Route::get('get-admin-data', function() {
    return ResourceService::getDataForAdminPage();
}
);

$entityRoutePrefixControllerMap = [
    'users' => UserController::class,
    'projects' => Project::class,
    ''

];


Route::get('get-all-projects', function () {
    return Project::with('tasks')->paginate(20);
});

Route::get('tasks', function() {
    return Task::all();
});

Route::prefix('admin')->group(function () {
    Route::get('/users', [ResourceController::class, 'getUserAdminPanel'])->name('admin-users');
    Route::get('/projects', [ResourceController::class, 'getProjectAdminPanel'])->name('admin-projects');
    Route::get('/tasks', [ResourceController::class, 'getTaskAdminPanel'])->name('admin-tasks');
    Route::get('/create-user', [ResourceController::class, 'getUserCreationForm'])->name('admin-users-create-form');
    Route::get('/create-task', [ResourceController::class, 'getTaskCreationForm'])->name('admin-tasks-create-form');
    Route::get('/create-project', [ResourceController::class, 'getProjectCreationForm'])->name('admin-projects-create-form');
    Route::get('/update-user/{id}', [ResourceController::class, 'getUserUpdateForm'])->name('admin-users-update-form');
    Route::get('/update-task/{id}', [ResourceController::class, 'getTaskUpdateForm'])->name('admin-tasks-update-form');
    Route::get('/update-project/{id}', [ResourceController::class, 'getProjectUpdateForm'])->name('admin-projects-update-form');

    Route::post('/create-user', function(Request $request) {
        User::create($request->all());
        return redirect(route('admin-users'));
    })->name('admin-user-create');

    Route::put('/update-user/{id}', function(Request $request, $id) {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect(route('admin-users'));
    })->name('admin-user-update');

    Route::delete('/delete-user/{id}', function(Request $request, $id) {
        User::find($id)->delete();
        return redirect(route('admin-users'));
    })->name('admin-user-delete');

    Route::post('/create-task', function(Request $request) {
        Task::create($request->all());
        return redirect(route('admin-tasks'));
    })->name('admin-task-create');

    Route::put('/update-task/{id}', function(Request $request, $id) {
        $task = Task::find($id);
        $task->fill($request->all());
        $task->save();
        return redirect(route('admin-tasks'));
    })->name('admin-task-update');

    Route::delete('/delete-task/{id}', function(Request $request, $id) {
        Task::find($id)->delete();
        return redirect(route('admin-tasks'));
    })->name('admin-task-delete');

    Route::post('/create-project', function(Request $request) {
        Project::create($request->all());
        return redirect(route('admin-projects'));
    })->name('admin-project-create');

    Route::put('/update-project/{id}', function(Request $request, $id) {
        $project = Project::find($id);
        $project->fill($request->all());
        $project->save();
        return redirect(route('admin-projects'));
    })->name('admin-project-update');

    Route::delete('/delete-project/{id}', function(Request $request, $id) {
        Project::find($id)->delete();
        return redirect(route('admin-tasks'));
    })->name('admin-project-delete');

    
});


