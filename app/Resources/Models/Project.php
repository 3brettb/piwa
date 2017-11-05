<?php

namespace App\Resources\Models;

use App\Models\Project as ProjectModel;

class Project
{

    public static function RecentTasks(ProjectModel $project, $num = 5)
    {
        return $project->tasks()->orderBy('updated_at', 'DESC')->limit($num)->get();
    }

    public static function RecentComments(ProjectModel $project, $num = 5)
    {
        return $project->comments()
                       ->orderBy('updated_at', 'DESC')
                       ->limit($num)
                       ->get()
                       ->reverse();
    }

}