<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $venue->name }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $venue->address }}</p>
</div>

<!-- District Id Field -->
<div class="form-group">
    {!! Form::label('district_id', 'District Id:') !!}
    <p>{{ $venue->district_id }}</p>
</div>

<!-- State Id Field -->
<div class="form-group">
    {!! Form::label('state_id', 'State Id:') !!}
    <p>{{ $venue->state_id }}</p>
</div>

<!-- Lat Field -->
<div class="form-group">
    {!! Form::label('lat', 'Lat:') !!}
    <p>{{ $venue->lat }}</p>
</div>

<!-- Lng Field -->
<div class="form-group">
    {!! Form::label('lng', 'Lng:') !!}
    <p>{{ $venue->lng }}</p>
</div>

<!-- Owner Id Field -->
<div class="form-group">
    {!! Form::label('owner_id', 'Owner Id:') !!}
    <p>{{ $venue->owner_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $venue->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $venue->updated_at }}</p>
</div>

