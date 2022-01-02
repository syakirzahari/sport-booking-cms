<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $vendor->name }}</p>
</div>

<!-- Is Active Field -->
<div class="form-group">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>{{ $vendor->is_active }}</p>
</div>

<!-- Telephone Number Field -->
<div class="form-group">
    {!! Form::label('telephone_number', 'Telephone Number:') !!}
    <p>{{ $vendor->telephone_number }}</p>
</div>

<!-- Ssm Number Field -->
<div class="form-group">
    {!! Form::label('ssm_number', 'Ssm Number:') !!}
    <p>{{ $vendor->ssm_number }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $vendor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $vendor->updated_at }}</p>
</div>

