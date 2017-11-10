<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return UserController
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a user
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dir.user.show', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {

    }

}