@if(auth()->user()->id == $comment->user_id)
    <li class="comment right">
@else
    <li class="comment left">
@endif
        <div class="clearfix">
            <span class="comment-user">{{$comment->user->full_name}}</span>
            <span class="comment-date">{{$comment->created_at->diffForHumans()}}</span>
            <div class="comment-content clearfix">{!! nl2br($comment->content) !!}</div>
        </div>
    </li>
    <hr class="comment-divider"/>