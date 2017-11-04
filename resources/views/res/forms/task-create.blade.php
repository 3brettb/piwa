<form class="form-horizontal" method="POST" action="{{ route('task.store', $project) }}">
    {{ csrf_field() }}
    
    <div class="input-group mb-3">
        <span class="input-group-addon"><i class="icon-pencil"></i></span>         
        <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required>
    </div>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="input-group mb-4">
        <span class="input-group-addon"><i class="icon-note"></i></span>
        <textarea id="description" type="text" class="form-control" name="description" placeholder="Description" style="min-height:60px;" required></textarea>
    </div>
    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>

    <div class="row align-items-center">
        <div class="col-10">
            <button type="submit" class="btn btn-primary px-4">Create Task</button>
        </div>
        <div class="col-2">
            <a style="float: right;" href="{{ URL::previous() }}">Cancel</a>
        </div>
    </div>
</form>