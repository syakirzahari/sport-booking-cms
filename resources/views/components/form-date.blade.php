<div class="{{$column}}">
    <div class="form-group  {{ $errors->has($name) ? 'has-error' : '' }}">
        {!! Form::label($name, __($l10n).':') !!}

        @if($isRequired)
            <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
        @endif

        {!! Form::text($name, null, ['class' => 'form-control','id'=>$name, 'autocomplete' => 'off']) !!}

        @if ($errors->has($name))
            <span class="help-block"><strong>{{ $errors->first($name) }}</strong></span>
        @endif
    </div>

    @push('scripts')
        <script type="text/javascript">
            $('#{{$name}}').datepicker({
                format: 'dd-mm-yyyy',
                useCurrent: false
            })
        </script>
    @endpush
</div>
