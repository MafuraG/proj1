<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Unitofmeasure Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unitofmeasure_id', 'Unit of measure :') !!}
    {!! Form::select('unitofmeasure_id', $units, $agroinput->unitofmeasure_id, ['placeholder' => 'Pick a unit of measure...','class' => 'form-control'])!!}    
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('agroinputs.index') !!}" class="btn btn-default">Cancel</a>
</div>
