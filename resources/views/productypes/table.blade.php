<table class="table table-responsive" id="productypes-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productypes as $productype)
        <tr>
            <td>{!! $productype->name !!}</td>
            <td>
                {!! Form::open(['route' => ['productypes.destroy', $productype->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('productypes.show', [$productype->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('productypes.edit', [$productype->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>