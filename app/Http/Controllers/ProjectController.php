<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return ProjectController
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
            'abbr' => strtoupper($request['abbr']),
            "user_id" => auth()->user()->id
        ], [
            'accepted' => 1
        ]);
        return redirect()->route('project.index');
    }

    public function show(Project $project)
    {
        return view('dir.project.show')->withProject($project);
    }

    public function comment(Request $request, Project $project)
    {
        $project->comments()->create([
            'content' => $request['content']
        ]);
        return redirect()->back();
    }
}
