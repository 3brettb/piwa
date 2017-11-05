<ul class="comments {{$class or ''}}">
    @each('res.items.comment', $comments, 'comment', 'res.items.comment-none')
</ul>