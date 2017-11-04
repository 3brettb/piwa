<?php

namespace App\Resources\Models;

use App\Models\Priority;
use App\Models\Status;
use App\Models\Types\TaskType;

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

}