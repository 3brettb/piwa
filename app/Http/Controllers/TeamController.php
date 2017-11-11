<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return TeamController
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a group
     *
     * @param Project $project
     * @param Team $team
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Team $team)
    {
        return view('dir.group.show', [
            'project' => $project,
            'team' => $team
        ]);
    }

}