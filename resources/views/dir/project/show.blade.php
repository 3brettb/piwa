@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Projects</a></li>
    <li class="breadcrumb-item active">{{$project->name}}</li>
@endsection

@section('content')

    <div class="row">
        @include('dir.project.partials.show-task-status', ['project' => $project])  
    </div>

    <div class="row">

        <div class="col-sm-4">

            <div class="card">
                <div class="card-header">
                    <i class="icon-info"></i>Project Info
                    <span class="float-right"><a href="{{ route('project.edit', $project) }}">Edit Info</a></span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 font-weight-bold">Project Name</div>
                        <div class="col-sm-8 text-muted">{{$project->name}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 font-weight-bold">Project Description</div>
                        <div class="col-sm-8 text-muted">{{$project->description}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 font-weight-bold">Date Started</div>
                        <div class="col-sm-8 text-muted">
                            {{
                                isset($project->end_date) ?
                                    $project->start_date->format(DateFormats::$STANDARD_DATE_LONG) :
                                    $project->created_at->format(DateFormats::$STANDARD_DATE_LONG)
                            }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 font-weight-bold">Date Due</div>
                        <div class="col-sm-8 text-muted">{{isset($project->end_date) ? $project->end_date->format(DateFormats::$STANDARD_DATETIME_LONG) : "None"}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 font-weight-bold">Users on Project</div>
                        <div class="col-sm-8 text-muted">{{$project->users->count()}}</div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <i class="icon-people"></i>Users
                    <span class="float-right"><a href="{{ route('project.users', $project) }}">Manage Users</a></span>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th>User</th>
                            <th>Added</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($project->users as $user)
                            <tr>
                                <td>{{$user->fullname}}</td>
                                @if($user->pivot->accepted == 1)
                                    <td>{{$user->pivot->created_at->format(DateFormats::$STANDARD_DATE_LONG)}}</td>
                                @else
                                    <td>Awaiting Acceptance</td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="col-sm-8">

            <div class="card">
                <div class="card-header">
                    <i class="icon-layers"></i>Recent Tasks
                    <span class="float-right"><a href="{{ route('task.create', $project) }}">Create new task</a></span>
                </div>
                <div class="card-body">
                    @include('res.tables.tasks', ['tasks' => $recent_tasks])
                </div>
                <div class="card-footer">
                    <a href="{{route('task.index', $project)}}">View All Project Tasks</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <i class="icon-info"></i>Recent Comments
                    <span class="float-right"><a href="{{ route('project.comments', $project) }}">View All Comments</a></span>
                </div>
                <div class="card-body" style="margin: -20px;">
                    @include('res.lists.comments', ['comments' => $recent_comments])
                </div>
                <div class="card-footer no-padding">
                    @include('res.forms.comment-create', ['action' => route('project.comment', $project)])
                </div>
            </div>

        </div>

    </div>

@endsection