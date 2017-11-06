<?php

namespace App\Http\Controllers;

use App\Resources\Models\Task as TaskResource;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return TaskController
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Project $project)
    {
        return view('dir.task.create')->withProject($project);
    }

    /**
     * Store a new task in a project
     *
     * @param Project $project
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project, Request $request)
    {
        $project->tasks()->create([
            'name' => $request['name'],
            'description' => $request['description'],
            'status_id' => TaskResource::$DEFAULT_STATUS_ID,
            'priority_id' => $request['priority'],
            'type_id' => $request['type'],
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('project.show', $project);
    }

    /**
     * Display a task
     *
     * @param Task $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('dir.task.show')->withTask($task);
    }
}
