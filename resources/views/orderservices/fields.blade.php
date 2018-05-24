<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Task Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('task_id', 'Task Id:') !!}
    {!! Form::number('task_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Agroservice Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agroservice_id', 'Agroservice Id:') !!}
    {!! Form::number('agroservice_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('orderservices.index') !!}" class="btn btn-default">Cancel</a>
</div>
