<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Project;
use App\Models\TaskGroup;
use Illuminate\Http\Request;

class TaskGroupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return TaskGroupController
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a group
     *
     * @param Project $project
     * @param TaskGroup $task_group
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, TaskGroup $task_group)
    {
        return view('dir.group.show', [
            'project' => $project,
            'task_group' => $task_group
        ]);
    }

}