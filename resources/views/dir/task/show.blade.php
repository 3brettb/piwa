@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Projects</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.show', $project) }}">{{$project->name}}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.tasks', $project) }}">Tasks</a></li>
    <li class="breadcrumb-item active">{{$task->pid}}</li>
@endsection

@section('content')

    <a href="{{ route('task.edit', [$project, $task]) }}">Edit Task</a>

@endsection
