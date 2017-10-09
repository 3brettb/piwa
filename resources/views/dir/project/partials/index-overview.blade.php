<div class="row d-flex justify-content-start">
    <h4>{{$project->name}}</h4>
    <span class="ml-auto">
        <a href="{{ route('project.show', $project) }}">Go To Project Page</a>
    </span>
</div>
<div class="row" style="border-top: 1px solid rgba(0,0,0,0.1);">
    <ul style="list-style:none; padding:0;">
        <li><strong>Created: </strong>{{$project->created_at->toFormattedDateString()}}</li>
        <li><strong>Start Date: </strong>{{$project->begin_date}}</li>
        <li><strong>Due Date: </strong>{{$project->due_date}}</li>
        <li><strong>Tags: </strong>
            @foreach($project->tags as $tag)
                @include("res.common.tag", ['tag' => $tag])
            @endforeach
        </li>
        <li><strong>Description: </strong> {{$project->description}}</li>
    </ul>
</div>
<div class="row">
    Project Users <br>
    My Watched Tasks <br>
    My Tasks </br>
</div>