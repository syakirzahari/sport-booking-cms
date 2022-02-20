
 <div class="form-group col-sm-6 {{ $errors->has('name') ? 'has-error' : '' }}">
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
    @if ($errors->has('name'))
    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
    @endif
</div>


<div class="form-group col-sm-6 {{ $errors->has('email') ? 'has-error' : '' }}">
    {{ Form::label('email', 'Email:') }}
    {{ Form::text('email', null, ['class' => 'form-control']) }}
    @if ($errors->has('email'))
    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
    @endif
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
    {{ Form::label('telephone_number', 'Phone Number:') }}
    {{ Form::text('telephone_number', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('vendor_id', 'Vendor:') }}
    {{ Form::select('vendor_id', $vendors, null, ['class' => 'form-control']) }}
</div>
