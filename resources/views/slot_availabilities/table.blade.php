<div class="table-responsive-sm">
    <table class="table table-striped" id="slotAvailabilities-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Time From</th>
                <th>Time To</th>
                <tH>Rate (RM)</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @if(count($slotAvailabilities) > 0)
        @foreach($slotAvailabilities as $i => $slotAvailability)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $slotAvailability->date }}</td>
                <td>{{ $slotAvailability->time_from }}</td>
                <td>{{ $slotAvailability->time_to }}</td>
                <td>RM {{ $slotAvailability->rate }}</td>
                <td>
                    {!! Form::open(['route' => ['slotAvailabilities.destroy', $slotAvailability->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{{ route('slotAvailabilities.show', [$slotAvailability->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a> --}}
                        <a href="{{ route('slotAvailabilities.edit', [$slotAvailability->id, 'venue_slot_id' => request()->venue_slot_id ?? 'null' ]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        @else
        <td colspan="11">No Data</td>
        @endif
        </tbody>
    </table>
</div>