<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return response()->json(Job::all(), 200);
    }

    public function store(Request $request)
    {
        $entity = new Job;
        $entity->name = $request->name;
        $entity->save();
        return response()->json($entity, 201);
    }

    public function show($id)
    {
        return response()->json(Job::findOrFail($id), 200);
    }

    public function update($id)
    {
        $entity = Job::findOrFail($id);

    }

    

    public function destroy($id)
    {
        Job::findOrFail($id)->delete();
        return response('starus', 204);
    }
}
