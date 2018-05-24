<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $orderservice->name !!}</p>
</div>

<!-- Task Id Field -->
<div class="form-group">
    {!! Form::label('task_id', 'Farm task:') !!}
    <p>{!! $orderservice->task->name !!}</p>
</div>

<!-- Agroservice Id Field -->
<div class="form-group">
    {!! Form::label('agroservice_id', 'Agroservice:') !!}
    <p>{!! $orderservice->agroservice->name !!}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $orderservice->price !!}</p>
</div>


