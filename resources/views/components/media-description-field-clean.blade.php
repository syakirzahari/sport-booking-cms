<div class="form-group col-md-6 {{ $errors->has('file' . $i . '_description') ? 'has-error' : '' }}">
    {!! Form::label('file' . $i . '_description', __('models/projects.fields.file' . $i . '_description').':') !!}
    <sup style="color:red">
    {!! Form::text('file' . $i . '_description', null, ['class' => 'form-control']) !!}
    @if ($errors->has('file' . $i . '_description'))
        <span class="help-block"><strong>{{ $errors->first('file' . $i . '_description') }}</strong></span>
    @endif
</div>
