<!-- Booking No Field -->
<div class="form-group">
    {!! Form::label('booking_no', 'Booking No:') !!}
    <p>{{ $booking->booking_no }}</p>
</div>

<!-- Slot Id Field -->
<div class="form-group">
    {!! Form::label('slot_id', 'Slot Id:') !!}
    <p>{{ $booking->slot_id }}</p>
</div>

<!-- Venue Id Field -->
<div class="form-group">
    {!! Form::label('venue_id', 'Venue Id:') !!}
    <p>{{ $booking->venue_id }}</p>
</div>

<!-- Is Deposit Field -->
<div class="form-group">
    {!! Form::label('is_deposit', 'Is Deposit:') !!}
    <p>{{ $booking->is_deposit }}</p>
</div>

<!-- Is Full Field -->
<div class="form-group">
    {!! Form::label('is_full', 'Is Full:') !!}
    <p>{{ $booking->is_full }}</p>
</div>

<!-- Payment Status Field -->
<div class="form-group">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    <p>{{ $booking->payment_status }}</p>
</div>

<!-- Is Refund Field -->
<div class="form-group">
    {!! Form::label('is_refund', 'Is Refund:') !!}
    <p>{{ $booking->is_refund }}</p>
</div>

<!-- Total Amount Field -->
<div class="form-group">
    {!! Form::label('total_amount', 'Total Amount:') !!}
    <p>{{ $booking->total_amount }}</p>
</div>

<!-- Booked By Field -->
<div class="form-group">
    {!! Form::label('booked_by', 'Booked By:') !!}
    <p>{{ $booking->booked_by }}</p>
</div>

<!-- Collected By Field -->
<div class="form-group">
    {!! Form::label('collected_by', 'Collected By:') !!}
    <p>{{ $booking->collected_by }}</p>
</div>

