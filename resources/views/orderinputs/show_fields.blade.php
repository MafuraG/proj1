<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $orderinput->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $orderinput->name !!}</p>
</div>

<!-- Task Id Field -->
<div class="form-group">
    {!! Form::label('task_id', 'Task:') !!}
    <p>{!! $orderinput->task->name !!}</p>
</div>

<!-- Agroinput Id Field -->
<div class="form-group">
    {!! Form::label('agroinput_id', 'Agroinput:') !!}
    <p>{!! $orderinput->agroinput->name !!}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $orderinput->price !!}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{!! $orderinput->quantity !!}</p>
</div>


