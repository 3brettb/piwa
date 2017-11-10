<tr class="task">
    <td>
        @include('res.common.priority', ['priority' => $task->priority])
    </td>
    <td>
        <a href="{{ route('task.show', [$task->project, $task]) }}">{{$task->pid}}</a>
    </td>
    <td>{{$task->name}}</td>
    <td>
        @if($task->parent)
            <a href="{{ route('task.show', [$task->project, $task->parent]) }}">{{$task->parent->pid}}</a>
        @else
            None
        @endif
    </td>
    <td>
        <a href="{{ route('user.show', $task->user) }}">{{$task->user->full_name}}</a>
    </td>
    <td>{{$task->created_at->format(DateFormats::$STANDARD_DATE_LONG)}}</td>
    <td>
        @if($task->taskable)
            <a href="{{ $task->taskable->taskable_url }}">{{$task->taskable->taskable_display}}</a>
        @else
            Not Assigned
        @endif
    </td>
    <td>
        @include('res.common.status', ['status' => $task->status])
    </td>
</tr>