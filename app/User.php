<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Activity;
use App\Models\Comment;
use App\Models\Project;
use App\Models\ProjectUser;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password',
    ]; 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public static function boot()
    {
        static::creating(function($model){
            $model->confirmed = 1;
        });
    }

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getFullnameAttribute()
    {
        return $this->firstname . " " . $this->lastname;
    }
    
    public function owned_projects()
    {
        return $this->hasMany(Project::class);
    }

    public function projects()
    {
        return $this->belongstoMany(Project::class, 'project_users', 'user_id', 'project_id');
    }

}
