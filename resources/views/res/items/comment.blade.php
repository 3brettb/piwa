<li class="comment">
    <div>
        <span class="comment-user">{{$comment->user->full_name}}</span>
        <span class="comment-date">{{$comment->created_at}}</span>
        <p class="comment-content">{{$comment->content}}</p>
    </div>
</li>