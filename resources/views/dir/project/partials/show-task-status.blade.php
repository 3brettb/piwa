<div class="col-sm-6 col-md-2">
    <div class="card text-black bg-default">
        <div class="card-body">
            <div class="row no-margin mb-0">
                <div class="col-sm-9">
                    <div class="h5 mb-0">{{$project->submitted_tasks->count()}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Submitted Tasks</small>
                </div>
                <div class="col-sm-3">
                    <div class="h3 text-muted text-right mb-0">
                        <i class="icon-cloud-upload"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-md-2">
    <div class="card text-white bg-primary">
        <div class="card-body">
            <div class="row no-margin mb-0">
                <div class="col-sm-9">
                    <div class="h5 mb-0">{{$project->open_tasks->count()}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Open Tasks</small>
                </div>
                <div class="col-sm-3">
                    <div class="h3 text-muted text-right mb-0">
                        <i class="icon-info"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-md-2">
    <div class="card text-white bg-warning">
        <div class="card-body">
            <div class="row no-margin mb-0">
                <div class="col-sm-9">
                    <div class="h5 mb-0">{{$project->progress_tasks->count()}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">In-Progress Tasks</small>
                </div>
                <div class="col-sm-3">
                    <div class="h3 text-muted text-right mb-0">
                        <i class="icon-loop"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-md-2">
    <div class="card text-white bg-danger">
        <div class="card-body">
            <div class="row no-margin mb-0">
                <div class="col-sm-9">
                    <div class="h5 mb-0">{{$project->review_tasks->count()}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">In-Review Tasks</small>
                </div>
                <div class="col-sm-3">
                    <div class="h3 text-muted text-right mb-0">
                        <i class="icon-note"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-md-2">
    <div class="card text-white bg-success">
        <div class="card-body">
            <div class="row no-margin mb-0">
                <div class="col-sm-9">
                    <div class="h5 mb-0">{{$project->closed_tasks->count()}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Closed Tasks</small>
                </div>
                <div class="col-sm-3">
                    <div class="h3 text-muted text-right mb-0">
                        <i class="icon-like"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-md-2">
    <div class="card text-black bg-default">
        <div class="card-body">
            <div class="row no-margin mb-0">
                <div class="col-sm-9">
                    <div class="h5 mb-0">{{$project->tasks->count()}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Total Project Tasks</small>
                </div>
                <div class="col-sm-3">
                    <div class="h3 text-muted text-right mb-0">
                        <i class="icon-list"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>