<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;

class Watcher extends Model
{
    protected $table = 'watchers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'watchable_id', 'watchable_type',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function watchable()
    {
        return $this->morphTo();
    }
    
}