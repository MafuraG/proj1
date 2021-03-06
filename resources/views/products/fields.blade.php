<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Productype Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productype_id', 'Productype Id:') !!}
    {!! Form::number('productype_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Unitofmeasure Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unitofmeasure_id', 'Unitofmeasure Id:') !!}
    {!! Form::number('unitofmeasure_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
