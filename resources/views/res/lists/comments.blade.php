<ul class="comments {{$class or ''}}">
    @each('res.items.list.comment', $comments, 'comment', 'res.items.empty.li-comment')
</ul>