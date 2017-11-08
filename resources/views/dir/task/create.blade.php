@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Projects</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.show', $project)}}">{{$project->name}}</a></li>
    <li class="breadcrumb-item active">Add a Task</li>
@endsection

@section('content')
    
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <i class="icon-plus"></i> Create Task
                </div>
                <div class="card-body">
                    @include('res.forms.task.create-quick')
                </div>
            </div>
        </div>
    </div>

@endsection