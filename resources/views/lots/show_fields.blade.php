<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $lot->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $lot->name !!}</p>
</div>

<!-- Detail Field -->
<div class="form-group">
    {!! Form::label('detail', 'Detail:') !!}
    <p>{!! $lot->detail !!}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{!! $lot->active !!}</p>
</div>

<!-- Farm Id Field -->
<div class="form-group">
    {!! Form::label('farm_id', 'Farm name:') !!}
    <p>{!! $lot->farm->name !!}</p>
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Product :') !!}
    <p>{!! $lot->product->name !!}</p>
</div>



