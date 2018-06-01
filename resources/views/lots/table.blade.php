<table class="table table-responsive" id="lots-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Detail</th>
        <th>Active</th>
        <th>Farm Id</th>
        <th>Product Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($lots as $lot)
        <tr>
            <td>{!! $lot->name !!}</td>
            <td>{!! $lot->detail !!}</td>
            @if ($lot->active)
                <td>Active</td>
            @else
                <td>Not Active </td>
            @endif    
            <td>{!! $lot->farm->name !!}</td>
            <td>{!! $lot->product->name !!}</td>
            <td>
                {!! Form::open(['route' => ['lots.destroy', $lot->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('lots.show', [$lot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('lots.edit', [$lot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>