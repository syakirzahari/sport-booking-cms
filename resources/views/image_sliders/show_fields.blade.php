
<!-- Is Active Field -->
<div class="form-group">
    {!! Form::label('is_active', 'Status:') !!}
    <p>{{ $imageSliders->is_active == 1 ? 'Active' : 'Inactive' }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $imageSliders->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $imageSliders->updated_at }}</p>
</div>

