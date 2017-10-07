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
        'name', 'description', 'user_id', 'start_date', 'end_date',
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

}