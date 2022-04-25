<?php

namespace App\Http\Controllers;

use App\Models\TaskInfo;
use Illuminate\Http\Request;

class TaskInfoController extends Controller
{
    public function index()
    {
        return response()->json(TaskInfo::all(), 200);
    }

    public function store(Request $request)
    {
        $entity = TaskInfo::create($request->all());
        return response()->json($entity, 201);
    }

    public function show($id)
    {
        return response()->json(TaskInfo::findOrFail($id), 200);
    }

    public function update($id)
    {
        $entity = TaskInfo::findOrFail($id);

    }

    

    public function destroy($id)
    {
        TaskInfo::findOrFail($id)->delete();
        return response('starus', 204);
    }
}
