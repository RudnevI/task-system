<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function index()
    {
        return response()->json(User::all(), 200);
    }

    public function store(Request $request)
    {
        $entity = User::create($request->name);
        return response()->json($entity, 201);
    }

    public function show($id)
    {
        return response()->json(User::findOrFail($id), 200);
    }

    public function update($id)
    {
        $entity = User::findOrFail($id);

    }



    public function destroy($id)
    {

        User::findOrFail($id)->delete();
        return response('starus', 204);
    }
}
