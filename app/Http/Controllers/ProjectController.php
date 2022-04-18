<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->json(Project::all(), 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|string|unique:projects']);
        $entity = Project::create($request->name);
        return response()->json($entity, 201);
    }

    public function show($id)
    {
        return response()->json(Project::findOrFail($id), 200);
    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return response('starus', 204);
    }
}
