<div class="table-responsive-sm">
    <table class="table table-striped" id="bookings-table">
        <thead>
            <tr>
                <th>Booking No</th>
        <th>Slot</th>
        <th>Venue</th>
        <th>Opponent</th>
        <th>Is Deposit</th>
        <th>Is Full</th>
        <th>Payment Status</th>
        <th>Is Refund</th>
        <th>Total Amount</th>
        <th>Booked By</th>
        <th>Collected By</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->booking_no }}</td>
            <td>{{ $booking->slot_id }}</td>
            <td>{{ $booking->venue_id }}</td>
            <td>{{ $booking->is_no_opponent == 0 ? 'No' : 'Yes' }}</td>
            <td>{{ $booking->is_deposit }}</td>
            <td>{{ $booking->is_full }}</td>
            <td>{{ $booking->payment_status }}</td>
            <td>{{ $booking->is_refund }}</td>
            <td>{{ $booking->total_amount }}</td>
            <td>{{ $booking->booked_by }}</td>
            <td>{{ $booking->collected_by }}</td>
                <td>
                    {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bookings.show', [$booking->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        {{-- <a href="{{ route('bookings.edit', [$booking->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a> --}}
                        {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>