<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;

class Status extends Model
{
    protected $table = 'statuses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'rank', 'previous_id', 'next_id', 'class',
    ];
    
    public function next()
    {
        return $this->belongsTo(Status::class, 'next_id');
    }

    public function previous()
    {
        return $this->belongsTo(Status::class, 'previous_id');
    }

}