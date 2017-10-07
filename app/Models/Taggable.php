<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Taggable extends Model
{
    protected $table = 'taggables';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'taggable_id', 'taggable_type', 'tag_id',
    ];

}