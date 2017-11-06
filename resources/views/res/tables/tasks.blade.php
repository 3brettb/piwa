<table class="table table-sm tasks {{$class or ''}}">
    <thead>
        <th>Priority</th>
        <th>PID</th>
        <th>Name</th>
        <th>Parent</th>
        <th>Reporter</th>
        <th>Reported</th>
        <th>Assigned To</th>
        <th>Status</th>
    </thead>
    <tbody>
        @each('res.items.table.task', $tasks, 'task', 'res.items.empty.tr-task')
    </tbody>
</table>