<table class="table table-responsive" id="tasks-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Detail</th>
        <th>Lot Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{!! $task->name !!}</td>
            <td>{!! $task->detail !!}</td>
            <td>{!! $task->lot->name !!}</td>
            <td>
                {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tasks.show', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tasks.edit', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>