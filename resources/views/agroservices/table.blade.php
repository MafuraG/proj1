<table class="table table-responsive" id="agroservices-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($agroservices as $agroservice)
        <tr>
            <td>{!! $agroservice->name !!}</td>
            <td>
                {!! Form::open(['route' => ['agroservices.destroy', $agroservice->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('agroservices.show', [$agroservice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('agroservices.edit', [$agroservice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>