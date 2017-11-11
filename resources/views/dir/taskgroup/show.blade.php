@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Projects</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.show', $project) }}">{{$project->name}}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('project.groups', $project) }}">Groups</a></li>
    <li class="breadcrumb-item active">{{$group->name}}</li>
@endsection

@section('content')

    Sprint/TaskGroup Page

@endsection
