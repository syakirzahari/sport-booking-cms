

 <div class="form-group col-sm-6">
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('address', 'Address:') }}
    {{ Form::textarea('address', null, ['class' => 'form-control', 'rows'=> 5]) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('state_id', 'State:') }}
    {{ Form::select('state_id', $states, null, ['class' => 'form-control choosen-select', 'id' => 'state_id']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('district_id', 'District:') }}
    {{ Form::select('district_id', $districts, null, ['class' => 'form-control chosen-select']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('latitude', 'Latitude:') }}
    {{ Form::text('lat', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('longitude', 'Longitude:') }}
    {{ Form::text('lng', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('telephone_number', 'Phone Number:') }}
    {{ Form::text('telephone_number', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('owner_id', 'Owner:') }}
    {{ Form::select('owner_id', $owner, null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('vendor_id', 'Vendor:') }}
    {{ Form::select('vendor_id', $vendors, null, ['class' => 'form-control']) }}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('venues.index') }}" class="btn btn-secondary">Cancel</a>
</div>
