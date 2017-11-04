<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Project $project)
    {
        return view('dir.task.create')->withProject($project);
    }

    public function store(Project $project, Request $request)
    {
        dd($project);
        $project->tasks()->create([

        ]);
        return redirect()->route('project.show', $project);
    }

    public function show(Task $task)
    {
        return view('dir.task.show')->withTask($task);
    }
}
