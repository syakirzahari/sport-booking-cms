<div class="form-group col-sm-6">
    {{ Form::label('name', 'Company Name:') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('name', 'Telephone Number:') }}
    {{ Form::text('telephone_number', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('name', 'SSM Number:') }}
    {{ Form::text('ssm_number', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('is_active', 'Active Status:') }}
    <br><input type="radio" name="is_active" value="1"> Yes
    <input type="radio" name="is_active" value="0"> No
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('vendors.index') }}" class="btn btn-secondary">Cancel</a>
</div>
