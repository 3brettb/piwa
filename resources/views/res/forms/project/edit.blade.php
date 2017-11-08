<form class="form-horizontal" method="POST" action="{{ route('project.update', $project) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <div class="input-group mb-3 row no-margin">
        <span class="input-group-addon col-sm-2">Name</span>
        <input id="name" type="text" class="form-control col-sm-9" name="name" value="{{ old('name', $project->name) }}" required>
    </div>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="input-group mb-3 row no-margin">
        <span class="input-group-addon col-sm-2">Abbr</span>
        <input id="abbr" type="text" maxlength="3" class="form-control col-sm-9" name="abbr" value="{{ old('abbr', $project->abbr) }}" required>
    </div>
    <div class="form-group{{ $errors->has('abbr') ? ' has-error' : '' }}">
        @if ($errors->has('abbr'))
            <span class="help-block">
                <strong>{{ $errors->first('abbr') }}</strong>
            </span>
        @endif
    </div>

    <div class="input-group mb-4 row no-margin">
        <span class="input-group-addon col-sm-2">Desc</span>
        <textarea id="description"
                  type="text"
                  class="form-control col-sm-9"
                  name="description"
                  style="min-height:60px;"
                  value="{{ old('description', $project->description) }}"
                  required>{!! old('description', $project->description) !!}</textarea>
    </div>
    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>

    <div class="row">
        <div class="col-6">
            <button type="submit" class="btn btn-primary px-4">Save</button>
            <span style="margin-left: 15px;"><a href="{{ URL::previous() }}">Cancel</a></span>
        </div>
    </div>
</form>