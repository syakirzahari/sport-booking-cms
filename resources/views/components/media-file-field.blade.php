<div class="form-group col-md-6 {{ $errors->has('file' . $i) ? 'has-error' : '' }}">
    {!! Form::label('file' . $i, __('Image ' . $i).':') !!}
    @if($i<=5)
    <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
    @else
    <sup style="color:red"></sup>
    @endif
    <br>{!! Form::file('file' . $i, ['accept' => '.png,.jpg,.pdf']) !!}
    @if ($errors->has('file' . $i))
        <br><span class="help-block"><strong>{{ $errors->first('file' . $i) }}</strong></span>
    @endif
</div>
