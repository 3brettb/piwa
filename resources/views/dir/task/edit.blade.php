@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Projects</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.show', $project) }}">{{$project->name}}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.tasks', $project) }}">Tasks</a></li>
    <li class="breadcrumb-item"><a href="{{ route('task.show', [$project, $task]) }}">{{$task->pid}}</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <span><i class="icon-exclamation"></i> Edit Task: {{ $task->pid }}</span>
                    <span class="float-right"><a href="{{ URL::previous() }}">Back</a></span>
                </div>
                <div class="card-body">
                    @include('res.forms.task.edit', ['task' => $task, 'project' => $project])
                </div>
            </div>
        </div>
    </div>

@endsection
