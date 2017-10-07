<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;

class Attachment extends Model
{
    protected $table = 'attachments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'location', 'type_id', 'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(Types\AttachmentType::class);
    }

    public function projects()
    {
        return $this->morphedByMany(Project::class, 'attachable');
    }

    public function tasks()
    {
        return $this->morphedByMany(Task::class, 'attachable');
    }

}