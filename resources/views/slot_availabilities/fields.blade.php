
<div class="form-group col-sm-4">
    {{ Form::label('slot_id', 'Slot:') }}
    {{ Form::hidden('venue_slot_id', $venue_slot_id ?? null) }}
    {{ Form::text('venue_slot_id', \App\Models\Slot::find($venue_slot_id)->id ?? '-', ['class' => 'form-control', 'readonly']) }}
</div>

<div class="form-group col-sm-4">
    {!! Form::label('date', 'Date:') !!}
    <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
    {!! Form::date('date', null, ['class' => 'form-control', 'id' => 'date', 'data-field' => "datetime"]) !!}
</div>

<div class="form-group col-sm-4">
    {!! Form::label('time_from', 'Time From:') !!}
    <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
    {!! Form::time('time_from', null, ['class' => 'form-control', 'id' => 'time_from', 'data-field' => "time"]) !!}
</div>

<div class="form-group col-sm-4">
    {!! Form::label('time_to', 'Time To:') !!}
    <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
    {!! Form::time('time_to', null, ['class' => 'form-control', 'id' => 'time_to', 'data-field' => "time"]) !!}
</div>

<div class="form-group col-sm-4">
    {{ Form::label('rate', 'Rate (RM):') }}
    <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
    {{ Form::number('rate', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-4">
    {{ Form::label('deposit_rate', 'Deposit (RM):') }}
    {{ Form::number('deposit_rate', null, ['class' => 'form-control']) }}
</div>

