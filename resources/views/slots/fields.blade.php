
<div class="form-group col-sm-4">
    {{ Form::label('venue_id', 'Venue:') }}
    {{ Form::hidden('venue_id', $venue_id ?? null) }}
    {{ Form::text('venue_id', \App\Models\Venue::find($venue_id)->id ?? '-', ['class' => 'form-control', 'readonly']) }}
</div>

<div class="form-group col-sm-4">
    {{ Form::label('sport_id', 'Sport:') }}
    {{ Form::hidden('sport_id', $sport_id ?? null) }}
    {{ Form::text('sport_id', \App\Models\Xref\Sport::find($sport_id)->id ?? '-', ['class' => 'form-control', 'readonly']) }}
</div>

<div class="form-group col-sm-4">
    {{ Form::label('name', 'Court Name:') }}
    {{ Form::text('court_name', null, ['class' => 'form-control']) }}
</div>

