<?php

use App\Models\Task;
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

Route::get('/search', function(Request $request) {

    $data = $request->all();
    if(!array_key_exists('name', $data)) {
        return response()->json(["Message" => "No parameter"], 413);
    }
    return TaskService::search($data['name']);
});
