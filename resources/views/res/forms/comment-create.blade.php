<form class="form-horizontal" method="POST" action="{{ $action }}">
    {{ csrf_field() }}

    <div class="input-group">
        <span class="input-group-addon"><i class="icon-speech"></i></span>
        <textarea id="content" type="text" class="form-control" name="content" style="min-height:60px; max-height:120px;" required></textarea>
        <button type="submit" class="btn btn-primary px-3">
            <i class="icon-arrow-up-circle"></i>
        </button>
    </div>
    
</form>