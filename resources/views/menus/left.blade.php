<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="icon-organization"></i> Project Index</a>
            </li>

            {{--  <li class="divider"></li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-docs"></i> Projects</a>
                <ul class="nav-dropdown-items">
                    @foreach(Auth::user()->projects as $project) 
                        <li class="nav-item">
                            <a class="nav-link" href='{{url("/project/$project->id")}}'><i class="icon-doc"></i> {{$project->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </li>  --}}
            
            <li class="divider"></li>
            <li class="nav-title">
                Projects
            </li>
            @if(Auth::user()->projects->count() > 0)
                @foreach(Auth::user()->projects as $project) 
                    <li class="nav-item">
                        <a class="nav-link" href='{{url("/project/$project->id")}}'><i class="icon-doc"></i> {{$project->name}}</a>
                    </li>
                @endforeach
            @else
                <li class="nav-text nav-indent">
                    You Have No Projects
                </li>
            @endif

            {{--  <li class="divider"></li>
            <li class="nav-title">
                Actions
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html"><i class="icon-plus"></i> Create Project</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html"><i class="icon-plus"></i> Create Task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html"><i class="icon-plus"></i> Create Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html"><i class="icon-plus"></i> Create Task Group</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html"><i class="icon-plus"></i> Create Use Case</a>
            </li>  --}}

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>