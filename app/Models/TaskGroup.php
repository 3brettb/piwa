<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Resources\Traits\Taskable;

class TaskGroup extends Model
{
    use Taskable;

    protected $table = 'task_groups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'project_id',
    ];
    
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    
    public function users()
    {
        return $this->morphedByMany(User::class, 'taskable');
    }
    
    public function teams()
    {
        return $this->morphedByMany(Team::class, 'taskable');
    }

    public function getTaskableUrlAttribute()
    {
        return route('project.group', [$this->project, $this]);
    }

    public function getTaskableNameAttribute()
    {
        return "Group: ".$this->name;
    }

    public function toString()
    {
        return $this->name;
    }

}