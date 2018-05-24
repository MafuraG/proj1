<table class="table table-responsive" id="unitofmeasures-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($unitofmeasures as $unitofmeasure)
        <tr>
            <td>{!! $unitofmeasure->name !!}</td>
            <td>
                {!! Form::open(['route' => ['unitofmeasures.destroy', $unitofmeasure->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('unitofmeasures.show', [$unitofmeasure->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('unitofmeasures.edit', [$unitofmeasure->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>