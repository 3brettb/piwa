@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Projects</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.show', $project) }}">{{$project->name}}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.teams', $project) }}">Teams</a></li>
    <li class="breadcrumb-item active">{{$team->name}}</li>
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <i class="icon-hourglass"></i>Assigned Tasks
        </div>
        <div class="card-body">
            @include('res.tables.tasks', ['tasks' => $assigned_tasks])
        </div>
    </div>

@endsection
