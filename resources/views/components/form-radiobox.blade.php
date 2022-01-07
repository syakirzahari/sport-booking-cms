<div class="{{$column ?? 'col-md-6'}}">
    <div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
        {!! Form::label($name, __($l10n).':') !!}

        @if($isRequired)
            <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
            <br>
        @endif

        @foreach($selections as $id => $selection)
            {!! Form::radio($name, $id) !!} {{ $selection }} <br>
        @endforeach

        @if ($errors->has($name))
            <span class="help-block"><strong>{{ $errors->first($name) }}</strong></span>
        @endif
    </div>
</div>
