<span class="priority {{$priority->class or 'priority-default'}}">
    @for($i = 0; $i < $priority->rank+1; $i++)
        <i class="fa fa-exclamation"></i>
    @endfor
</span>