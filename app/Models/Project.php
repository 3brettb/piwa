<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;

class Project extends Model
{
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'abbr', 'description', 'user_id', 'start_date', 'end_date',
    ];
    
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->user();
    }

    public function use_cases()
    {
        return $this->hasMany(UseCase::class);
    }
    
    public function watchers()
    {
        return $this->morphMany(Watcher::class, 'watchable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'project_users', 'project_id', 'user_id');
    }

    public function getBeginDateAttribute()
    {
        if($this->start_date) return $this->start_date->toFormattedDateString();
        else return "No Start Date";
    }

    public function getDueDateAttribute()
    {
        if($this->end_date) return $this->end_date->toFormattedDateString();
        else return "No Due Date";
    }

    public function getSubmittedTasksAttribute()
    {
        return $this->tasks->where('status_id', 1);
    }
    
    public function getOpenTasksAttribute()
    {
        return $this->tasks->where('status_id', 2);
    }
    
    public function getProgressTasksAttribute()
    {
        return $this->tasks->where('status_id', 3);
    }
    
    public function getReviewTasksAttribute()
    {
        return $this->tasks->where('status_id', 4);
    }
    
    public function getClosedTasksAttribute()
    {
        return $this->tasks->where('status_id', 5);
    }

}