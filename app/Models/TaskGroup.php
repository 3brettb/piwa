<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TaskGroup extends Model
{
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

}