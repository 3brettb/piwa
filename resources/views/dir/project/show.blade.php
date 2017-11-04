@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Projects</a></li>
    <li class="breadcrumb-item active">{{$project->name}}</li>
@endsection

@section('content')

    <div class="row">
        <h2>{{$project->name}}</h2>
    </div>

    <div class="row">
        @include('dir.project.partials.show-task-status', ['project' => $project])  
    </div>

    <div class="row">

        <div class="col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header">
                    <i class="icon-layers"></i>Tasks
                    <span class="float-right"><a href="{{ route('task.create', $project) }}">Create new task</a></span>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                    ea commodo consequat.
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header">
                    <i class="icon-people"></i>Users
                    <span class="float-right"><a href="#">Add User</a></span>
                </div>
                <div class="card-body">
                    <table class="table">
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
                                    <td>Added Date</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header">
                    <i class="icon-info"></i>Project Info
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                    ea commodo consequat.
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header">
                    <i class="icon-info"></i>Comments
                </div>
                <div class="card-body">
                    @include('res.lists.comments', ['comments' => $project->comments])
                </div>
                <div class="card-footer no-padding">
                    @include('res.forms.comment-create', ['action' => route('project.comment', $project)])
                </div>
            </div>
        </div>

    </div>

@endsection