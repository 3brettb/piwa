<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;

class Task extends Model
{
    protected $table = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'short',
        'name', 
        'description', 
        'pid',
        'project_id', 
        'usecase_id', 
        'task_id', 
        'start_date', 
        'end_date', 
        'projected_hours', 
        'points', 
        'status_id', 
        'priority_id', 
        'type_id', 
        'taskable_id', 
        'taskable_type', 
        'user_id',
    ];

    public static function boot()
    {
        static::creating(function($model){
            $num = Task::where('project_id', $model->project_id)->count() + 1;
            $model->pid = $model->project->abbr."-".$num;
        });
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reporter()
    {
        return $this->user();
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function usecase()
    {
        return $this->belongsTo(Usecase::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function parent()
    {
        return $this->task();
    }

    public function subtasks()
    {
        return $this->tasks();
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function type()
    {
        return $this->belongsTo(Types\AttachmentType::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function taskable()
    {
        return $this->morphTo();
    }
    
    public function watchers()
    {
        return $this->morphMany(Watcher::class, 'watchable');
    }

    public function getTaskedIdAttribute()
    {
        if($this->taskable_type == null)
        {
            return null;
        }
        else
        {
            return str_replace("\\", "_", $this->taskable_type) . "-" . $this->taskable_id;
        }
    }

}