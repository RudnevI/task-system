<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return response()->json(Task::all(), 200);
    }

    public function store(Request $request)
    {
        $entity = Task::create($request->all());
        return response()->json($entity, 201);
    }

    public function show($id)
    {
        return response()->json(Task::findOrFail($id), 200);
    }

    public function update($id)
    {
        $entity = Task::findOrFail($id);

    }

    

    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return response('starus', 204);
    }
}
