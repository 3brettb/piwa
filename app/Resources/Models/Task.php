<?php

namespace App\Resources\Models;

use App\User;
use App\Models\Task as TaskModel;
use App\Models\Priority;
use App\Models\Status;
use App\Models\Project;
use App\Models\Types\TaskType;
use Illuminate\Http\Request;


class Task
{
    public static $DEFAULT_STATUS_ID = 1;

    public static function PrioritiesList()
    {
        return Priority::all()->pluck('description', 'id');
    }

    public static function StatusesList()
    {
        return Status::all()->pluck('description', 'id');
    }

    public static function TypesList()
    {
        return TaskType::all()->pluck('description', 'id');
    }

    /**
     * @param Request $request
     */
    public static function Validate(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'status' => 'required',
            'priority' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);
    }

    /**
     * @param Request $request
     * @param Project $project
     * @param User $user
     */
    public static function Create(Request $request, Project $project, User $user)
    {
        $project->tasks()->create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status_id' => self::$DEFAULT_STATUS_ID,
            'priority_id' => $request->input('priority'),
            'type_id' => $request->input('type'),
            'user_id' => $user->id,
        ]);
    }

    /**
     * @param TaskModel $task
     * @param Request $request
     */
    public static function Update(TaskModel $task, Request $request)
    {
        $task->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status_id' => $request->input('status'),
            'priority_id' => $request->input('priority'),
            'type_id' => $request->input('type'),
        ]);
    }

    public static function Destroy(TaskModel $task)
    {
        //$task->project()->dissociate();
        // Handle dissassociation of subtasks
        // Handle deletion of comments
        // Handle deletion of taggables
        // Handle deletion of attachments
        //$task->delete();
    }

}