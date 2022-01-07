<div class="{{$column}}">
    <div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
        @if($l10n != '')
            {!! Form::label($name, __($l10n).':') !!}
        @endif

        @if($isRequired)
            <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
        @endif

        {!! Form::textarea($name, null, ['class' => 'form-control ' . $summernote, 'id' => $name, 'rows' => $rows]) !!}

        @if ($errors->has($name))
            <span class="help-block"><strong>{{ $errors->first($name) }}</strong></span>
        @endif
    </div>
</div>
