<?php

namespace App\Resources\Models;

use Illuminate\Http\Request;

class Comment
{

    public static function Validate(Request $request)
    {
        $request->validate([
            'content' => 'required|max:255',
        ]);
    }

}