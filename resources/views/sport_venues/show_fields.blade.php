<!-- Sport Id Field -->
<div class="form-group">
    {!! Form::label('sport_id', 'Sport Id:') !!}
    <p>{{ $sportVenue->sport_id }}</p>
</div>

<!-- Venue Id Field -->
<div class="form-group">
    {!! Form::label('venue_id', 'Venue Id:') !!}
    <p>{{ $sportVenue->venue_id }}</p>
</div>

<!-- Time From Field -->
<div class="form-group">
    {!! Form::label('time_from', 'Time From:') !!}
    <p>{{ $sportVenue->time_from }}</p>
</div>

<!-- Time To Field -->
<div class="form-group">
    {!! Form::label('time_to', 'Time To:') !!}
    <p>{{ $sportVenue->time_to }}</p>
</div>

<!-- Creator Id Field -->
<div class="form-group">
    {!! Form::label('creator_id', 'Creator Id:') !!}
    <p>{{ $sportVenue->creator_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $sportVenue->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $sportVenue->updated_at }}</p>
</div>

