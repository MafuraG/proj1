<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $user->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Farmrole Id Field -->
<div class="form-group">
    {!! Form::label('farmrole_id', 'Farm role:') !!}
    <p>{!! $user->farmrole->name !!}</p>
</div>

