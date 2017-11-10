@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item">Users</li>
    <li class="breadcrumb-item active">{{$user->fullname}}</li>
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

    <div class="card">
        <div class="card-header">
            <i class="icon-envelope-letter"></i>Opened Tasks
        </div>
        <div class="card-body">
            @include('res.tables.tasks', ['tasks' => $opened_tasks])
        </div>
    </div>

@endsection
