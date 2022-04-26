<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\TaskInfo;
use App\Models\Job;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskInfoController extends Controller
{
    public function store(Request $request)

    {
   
    
        $data = $request->validate([
            
            'comment' => 'required|string',
            'task_id'=>'required|int'
        ]);
        $data['time_start'] = Carbon::now()->format('Y-m-d'); // в формате "2021-06-25 14:06:16"
        $data['time_end'] = Carbon::now()->format('Y-m-d'); // в формате "2021-06-25 14:06:16"
        
        $entity = TaskInfo::create($data);
        $entity->save();

        return response()->json($entity, 201);
    }

    public function show($id)
    {
        return response()->json(TaskInfo::all()->where('task_id', $id)->first());
       // return response()->json(TaskInfo::findOrFail($id), 200);
    }

    public function update(Request $request, $task_id)
    {
        $data =  $request->json()->all();
        $time_start = $request['time_start'];
        $time_end = $request['time_end'];
        $comment = $request['comment'];
        $job_name = $request['job_name'];
        $tast_status = $request['tast_status'];

        $task = Task::all()->where('id', $task_id)->first();
        $task->status = $tast_status; 
        $task->save();

        $job = Job::all()->where('name', $job_name)->first();
        $taskInfo = TaskInfo::all()->where('task_id', $task_id)->first();
        $taskInfo->time_start =Carbon::createFromTimeString("$time_start");       
        $taskInfo->time_end =Carbon::createFromTimeString("$time_end");
        $taskInfo->comment =$comment;
        if($job!=null){
             $taskInfo->job_id =$job->id;
        }
      
        $taskInfo->save();
        $projects = Project::all();
        return redirect('/');
    }  

    public function destroy($id)
    {
        TaskInfo::findOrFail($id)->delete();
        return response('starus', 204);
    }
}
