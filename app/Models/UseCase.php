<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;

class UseCase extends Model
{
    protected $table = 'usecases';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id', 'content',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    
}