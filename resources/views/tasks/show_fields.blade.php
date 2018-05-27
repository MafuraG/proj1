<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $task->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $task->name !!}</p>
</div>

<!-- Detail Field -->
<div class="form-group">
    {!! Form::label('detail', 'Detail:') !!}
    <p>{!! $task->detail !!}</p>
</div>

<!-- Lot Id Field -->
<div class="form-group">
    {!! Form::label('lot_id', 'Lot :') !!}
    <p>{!! $task->lot->name !!}</p>
</div>



