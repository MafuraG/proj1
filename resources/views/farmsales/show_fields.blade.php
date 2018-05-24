<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $farmsale->id !!}</p>
</div>

<!-- Lot Id Field -->
<div class="form-group">
    {!! Form::label('lot_id', 'Lot :') !!}
    <p>{!! $farmsale->lot->name !!}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $farmsale->price !!}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{!! $farmsale->quantity !!}</p>
</div>

