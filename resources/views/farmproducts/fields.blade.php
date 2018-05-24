<!-- Lot Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lot_id', 'Lot Id:') !!}
    {!! Form::number('lot_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Detail Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('detail', 'Detail:') !!}
    {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
</div>

<!-- Harvest Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harvest_plan', 'Harvest Plan:') !!}
    {!! Form::date('harvest_plan', null, ['class' => 'form-control']) !!}
</div>

<!-- Harvest Fact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harvest_fact', 'Harvest Fact:') !!}
    {!! Form::date('harvest_fact', null, ['class' => 'form-control']) !!}
</div>

<!-- Expiry Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiry', 'Expiry:') !!}
    {!! Form::date('expiry', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('farmproducts.index') !!}" class="btn btn-default">Cancel</a>
</div>
