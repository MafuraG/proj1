<table class="table table-responsive" id="farms-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Address</th>
        <th>User Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($farms as $farm)
        <tr>
            <td>{!! $farm->name !!}</td>
            <td>{!! $farm->address !!}</td>
            <td>{!! $farm->user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['farms.destroy', $farm->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('farms.show', [$farm->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('farms.edit', [$farm->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>