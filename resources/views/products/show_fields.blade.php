<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $product->name !!}</p>
</div>

<!-- Productype Id Field -->
<div class="form-group">
    {!! Form::label('productype_id', 'Produc type:') !!}
    <p>{!! $product->productype->name !!}</p>
</div>

<!-- Unitofmeasure Id Field -->
<div class="form-group">
    {!! Form::label('unitofmeasure_id', 'Unit o measure:') !!}
    <p>{!! $product->unitofmeasure->name !!}</p>
</div>



