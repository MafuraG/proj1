<table class="table table-responsive" id="farmroles-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($farmroles as $farmrole)
        <tr>
            <td>{!! $farmrole->name !!}</td>
            <td>
                {!! Form::open(['route' => ['farmroles.destroy', $farmrole->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('farmroles.show', [$farmrole->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('farmroles.edit', [$farmrole->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>