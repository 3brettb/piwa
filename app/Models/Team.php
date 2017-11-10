<?php

namespace App\Models;

use App\Resources\Traits\Taskable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;

class Team extends Model
{
    use Taskable;

    protected $table = 'teams';

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

    public function watchers()
    {
        return $this->morphMany(Watcher::class, 'watchable');
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, TeamUser::class);
    }

    public function getTaskableUrlAttribute()
    {
        return route('project.team', [$this->project, $this]);
    }

    public function getTaskableNameAttribute()
    {
        return "Team: ".$this->name;
    }

    public function toString()
    {
        return $this->name;
    }

}