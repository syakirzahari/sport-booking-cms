<div class="form-group col-sm-6">
    {{ Form::label('sport_id', 'Select Sports') }}
    {{ Form::select('sport_id', $sports, null, ['class' => 'form-control choosen-select', 'id' => 'state_id']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('venue_id', 'Select Venue:') }}
    {{ Form::select('venue_id', $venues, null, ['class' => 'form-control chosen-select']) }}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('time_from', 'Time From:') !!}
    <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
    {!! Form::time('time_from', null, ['class' => 'form-control', 'id' => 'time_from', 'data-field' => "time"]) !!}

    @if ($errors->has('time_from'))
        <span class="help-block"><strong>{{ $errors->first('time_from') }}</strong></span>
    @endif

    <div id="dtBox"></div>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('time_to', 'Time To:') !!}
    <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
    {!! Form::time('time_to', null, ['class' => 'form-control', 'id' => 'time_to', 'data-field' => "time"]) !!}

    @if ($errors->has('time_to'))
        <span class="help-block"><strong>{{ $errors->first('time_to') }}</strong></span>
    @endif

    <div id="dtBox"></div>
</div>
