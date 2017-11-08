<?php

namespace App\Resources\Models;

use App\User;
use App\Models\Project as ProjectModel;
use Illuminate\Http\Request;

class Project
{

    public static function TaskableList(ProjectModel $project)
    {
        return $project->taskable->pluck('taskable_name', 'taskable_id');
    }

    /**
     * @param ProjectModel $project
     * @param int $num
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function RecentTasks(ProjectModel $project, $num = 5)
    {
        return $project->tasks()->orderBy('updated_at', 'DESC')->limit($num)->get();
    }

    /**
     * @param ProjectModel $project
     * @param int $num
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function RecentComments(ProjectModel $project, $num = 5)
    {
        return $project->comments()
                       ->orderBy('updated_at', 'DESC')
                       ->limit($num)
                       ->get()
                       ->reverse();
    }

    /**
     * @param Request $request
     */
    public static function Validate(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'abbr' => 'required|max:3',
            'description' => 'required',
        ]);
    }

    /**
     * @param Request $request
     * @param User $user
     */
    public static function Create(Request $request, User $user)
    {
        $user->projects()->create([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            'abbr' => strtoupper($request->input('abbr')),
            "user_id" => $user->id
        ], [
            'accepted' => 1
        ]);
    }

    /**
     * @param ProjectModel $project
     * @param Request $request
     */
    public static function Update(ProjectModel $project, Request $request)
    {
        $old_abbr = $project->abbr;
        $project->update([
            'name' => $request->input('name', $project->name),
            'abbr' => $request->input('abbr', $project->abbr),
            'description' => $request->input('description', $project->description),
            'start_date' => $request->input('start_date', $project->start_date),
            'end_date' => $request->input('end_date', $project->end_date),
        ]);
        if($project->abbr != $old_abbr){
            foreach($project->tasks as $task)
            {
                $task->update([
                    'pid' => preg_replace("/($old_abbr)/", $project->abbr, $task->pid),
                ]);
            }
        }
    }

    public static function AddComment(ProjectModel $project, Request $request)
    {
        $project->comments()->create([
            'content' => $request['content']
        ]);
    }

}