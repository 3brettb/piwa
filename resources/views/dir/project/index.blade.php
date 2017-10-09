@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item active">Projects</li>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <i class="icon-organization"></i> My Projects
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Project Owner</th>
                                <th>Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td><a href="#" onclick="selectProject(event, 'project-{{$project->id}}')">{{$project->name}}</a></td>
                                    <td>{{$project->owner->fullname}}</td>
                                    <td>{{$project->due_date}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $projects->render('res.pagination.default-thin') }}

                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <i class="icon-doc"></i> Project
                </div>
                <div class="card-body">
                    <span class="project-content filler" style="font-style:italic">Select a project on the right</span>   

                    @foreach($projects as $project)
                        <div class="project-content" style="display:none" id="project-{{$project->id}}">
                            @include('dir.project.partials.index-overview', ['project' => $project])
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <i class="icon-plus"></i> New Project
                </div>
                <div class="card-body">
                    @include('res.forms.project-create')
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>

@endsection

@push('js')
    <script>

        function selectProject(evt, project) {

            var i, content;

            content = document.getElementsByClassName("project-content");
            for(i=0; i<content.length; i++){
                content[i].style.display = "none";
            }

            document.getElementById(project).style.display = "block";
        }

    </script>
@endpush