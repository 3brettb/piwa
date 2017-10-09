<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dir.project.index');
    }

    public function create()
    {
        return view('dir.project.create');
    }

    public function store(Request $request)
    {
        auth()->user()->projects()->create([
            "name" => $request['name'],
            "description" => $request['description'],
            "user_id" => auth()->user()->id
        ]);
        return redirect()->route('project.index');
    }
}
