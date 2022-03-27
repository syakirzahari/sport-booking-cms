<!-- Booking No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('booking_no', 'Booking No:') !!}
    {!! Form::text('booking_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Slot Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slot_id', 'Slot Id:') !!}
    {!! Form::number('slot_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Venue Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venue_id', 'Venue Id:') !!}
    {!! Form::number('venue_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Deposit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_deposit', 'Is Deposit:') !!}
    {!! Form::number('is_deposit', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Full Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_full', 'Is Full:') !!}
    {!! Form::number('is_full', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    {!! Form::text('payment_status', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Is Refund Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_refund', 'Is Refund:') !!}
    {!! Form::number('is_refund', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_amount', 'Total Amount:') !!}
    {!! Form::number('total_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Booked By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('booked_by', 'Booked By:') !!}
    {!! Form::number('booked_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Collected By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('collected_by', 'Collected By:') !!}
    {!! Form::number('collected_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Cancel</a>
</div>
