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

    /**
     * Task Index page for a project
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        return  view('dir.task.index', [
            'project' => $project
        ]);
    }

    /**
     * Create a new Task
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        return view('dir.task.create', [
            'project' => $project
        ]);
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
        TaskResource::Validate($request);
        TaskResource::Create($request, $project, $request->user());
        return redirect()->route('project.show', $project);
    }

    /**
     * Display a task
     *
     * @param Project $project
     * @param Task $task
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Task $task)
    {
        return view('dir.task.show', [
            'project' => $project,
            'task' => $task
        ]);
    }

    /**
     * @param Project $project
     * @param Task $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Task $task)
    {
        return view('dir.task.edit', [
            'project' => $project,
            'task' => $task
        ]);
    }

    public function update(Project $project, Task $task, Request $request)
    {
        TaskResource::Validate($request);
        TaskResource::Update($task, $request);
        return redirect()->route('task.show', [$project, $task]);
    }

    /**
     * @param Project $project
     * @param Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, Task $task)
    {
        TaskResource::Destroy($task);
        return redirect()->route('project.show', $project);
    }

}
