<div class="form-group">
    {{ Form::label('id', 'ID:') }}
    <p>{{ $state->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {{ Form::label('name', 'Name:') }}
    <p>{{ $state->name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $state->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $state->updated_at }}</p>
</div>

