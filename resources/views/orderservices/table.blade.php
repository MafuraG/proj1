<table class="table table-responsive" id="orderservices-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Task Id</th>
        <th>Agroservice Id</th>
        <th>Price</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($orderservices as $orderservice)
        <tr>
            <td>{!! $orderservice->name !!}</td>
            <td>{!! $orderservice->task->name !!}</td>
            <td>{!! $orderservice->agroservice->name !!}</td>
            <td>{!! $orderservice->price !!}</td>
            <td>
                {!! Form::open(['route' => ['orderservices.destroy', $orderservice->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('orderservices.show', [$orderservice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('orderservices.edit', [$orderservice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>