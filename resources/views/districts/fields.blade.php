

<div class="form-group col-sm-6">
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('state_id', 'State:') }}
    {{ Form::select('state_id', $states, null, ['class' => 'form-control']) }}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('districts.index') }}" class="btn btn-secondary">Cancel</a>
</div>
