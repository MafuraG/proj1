<table class="table table-responsive" id="orderinputs-table">
    <thead>
        <tr>
        <th>Name</th>
        <th>Farm task</th>
        <th>Agroinput</th>
        <th>Price</th>
        <th>Quantity</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($orderinputs as $orderinput)
        <tr>
            <td>{!! $orderinput->name !!}</td>
            <td>{!! $orderinput->task->name !!}</td>
            <td>{!! $orderinput->agroinput->name !!}</td>
            <td>{!! $orderinput->price !!}</td>
            <td>{!! $orderinput->quantity !!}</td>
            <td>
                {!! Form::open(['route' => ['orderinputs.destroy', $orderinput->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('orderinputs.show', [$orderinput->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('orderinputs.edit', [$orderinput->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>