<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;

class Team extends Model
{
    protected $table = 'statuses';

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

}