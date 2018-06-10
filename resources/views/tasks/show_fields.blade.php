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

<div class="form-group">
    {!! Form::label('started_at', 'Start date:') !!}
    {!! Form::date('started_at', $task->started_at, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('completed_at', 'Completed date:') !!}
    {!! Form::date('completed_at', $task->completed_at, ['class' => 'form-control']) !!}
</div>



