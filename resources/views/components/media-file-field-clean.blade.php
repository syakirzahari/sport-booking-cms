<div class="form-group col-md-6 {{ $errors->has('file' . $i) ? 'has-error' : '' }}">
    {!! Form::label('file' . $i, __('models/projects.fields.file' . $i).':') !!}
    <sup style="color:red"></sup>
    <br>{!! Form::file('file' . $i, ['accept' => '.png,.jpg,.pdf']) !!}
    @if ($errors->has('file' . $i))
        <br><span class="help-block"><strong>{{ $errors->first('file' . $i) }}</strong></span>
    @endif
</div>
