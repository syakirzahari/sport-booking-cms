<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $slotAvailability->date }}</p>
</div>

<!-- Time From Field -->
<div class="form-group">
    {!! Form::label('time_from', 'Time From:') !!}
    <p>{{ $slotAvailability->time_from }}</p>
</div>

<!-- Time To Field -->
<div class="form-group">
    {!! Form::label('time_to', 'Time To:') !!}
    <p>{{ $slotAvailability->time_to }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $slotAvailability->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $slotAvailability->updated_at }}</p>
</div>

