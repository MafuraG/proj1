<table class="table table-responsive" id="farmproducts-table">
    <thead>
        <tr>
            <th>Lot Id</th>
        <th>Product Id</th>
        <th>Quantity</th>
        <th>Detail</th>
        <th>Harvest Plan</th>
        <th>Harvest Fact</th>
        <th>Expiry</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($farmproducts as $farmproduct)
        <tr>
            <td>{!! $farmproduct->lot_id !!}</td>
            <td>{!! $farmproduct->product_id !!}</td>
            <td>{!! $farmproduct->quantity !!}</td>
            <td>{!! $farmproduct->detail !!}</td>
            <td>{!! $farmproduct->harvest_plan !!}</td>
            <td>{!! $farmproduct->harvest_fact !!}</td>
            <td>{!! $farmproduct->expiry !!}</td>
            <td>
                {!! Form::open(['route' => ['farmproducts.destroy', $farmproduct->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('farmproducts.show', [$farmproduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('farmproducts.edit', [$farmproduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>