<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Detail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detail', 'Detail:') !!}
    {!! Form::text('detail', null, ['class' => 'form-control']) !!}
</div>

<!-- Lot Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lot_id', 'Lot :') !!}
    {!! Form::select('lot_id', $userlots, $task->lot_id, ['placeholder' => 'Pick a farm lot...','class' => 'form-control'])!!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('started_at', 'Start date:') !!}
    {!! Form::date('started_at', $task->started_at, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('completed_at', 'Completed date:') !!}
    {!! Form::date('completed_at', $task->completed_at, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tasks.index') !!}" class="btn btn-default">Cancel</a>
</div>
