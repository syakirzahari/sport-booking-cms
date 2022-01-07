<div class="form-group col-md-6 {{ $errors->has('file' . $i . '_description') ? 'has-error' : '' }}">
    {!! Form::label('file' . $i . '_description', __('models/projects.fields.file' . $i . '_description').':') !!}
    @if($i <= 1)
    <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
    @else
    <sup style="color:red">
    @endif
    {!! Form::text('file' . $i . '_description', null, ['class' => 'form-control']) !!}
    @if ($errors->has('file' . $i . '_description'))
        <span class="help-block"><strong>{{ $errors->first('file' . $i . '_description') }}</strong></span>
    @endif
</div>
