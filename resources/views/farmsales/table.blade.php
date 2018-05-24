<table class="table table-responsive" id="farmsales-table">
    <thead>
        <tr>
            <th>Lot</th>
        <th>Price</th>
        <th>Quantity</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($farmsales as $farmsale)
        <tr>
            <td>{!! $farmsale->lot->name !!}</td>
            <td>{!! $farmsale->price !!}</td>
            <td>{!! $farmsale->quantity !!}</td>
            <td>
                {!! Form::open(['route' => ['farmsales.destroy', $farmsale->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('farmsales.show', [$farmsale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('farmsales.edit', [$farmsale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>