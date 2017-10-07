<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;

class TaskGroupUser extends Model
{
    protected $table = 'task_group_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task_group_id', 'taskable_id', 'taskable_type',
    ];

}