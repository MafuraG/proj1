<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $product->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $product->name !!}</p>
</div>

<!-- Productype Id Field -->
<div class="form-group">
    {!! Form::label('productype_id', 'Productype Id:') !!}
    <p>{!! $product->productype_id !!}</p>
</div>

<!-- Unitofmeasure Id Field -->
<div class="form-group">
    {!! Form::label('unitofmeasure_id', 'Unitofmeasure Id:') !!}
    <p>{!! $product->unitofmeasure_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $product->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $product->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $product->deleted_at !!}</p>
</div>

