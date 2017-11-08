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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
        TaskResource::Create($request, $project, auth()->user());
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
}
