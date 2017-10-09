@if($tag->class)
    <span class="tag {{$tag->class}}"><a href="{{ route('tag.show', $tag) }}">{{$tag->name}}</a></span>
@else
    <span class="tag tag-default"><a href="{{ route('tag.show', $tag) }}">{{$tag->name}}</a></span>
@endif