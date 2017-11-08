<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Resources\Models\Project as ProjectResource;
use App\Resources\Models\Comment as CommentResource;

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

    /**
     * Display the Create New Project Page
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dir.project.create');
    }

    /**
     * Store a new project
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProjectResource::Validate($request);
        ProjectResource::Create($request, auth()->user());
        return redirect()->route('project.index');
    }

    /**
     * Display the Edit Project Page
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dir.project.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update a project
     *
     * @param Project $project
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, Request $request)
    {
        ProjectResource::Validate($request);
        ProjectResource::Update($project, $request);
        return redirect()->route('project.show', $project);
    }

    /**
     * Display a project
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('dir.project.show', [
            'project' => $project
        ]);
    }

    public function destroy(Project $project, Request $request)
    {

    }

    /**
     * Add a comment to a project
     *
     * @param Request $request
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $request, Project $project)
    {
        CommentResource::Validate($request);
        ProjectResource::AddComment($project, $request);
        return redirect()->back();
    }
}
