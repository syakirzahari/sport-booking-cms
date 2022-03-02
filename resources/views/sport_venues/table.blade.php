<div class="table-responsive-sm">
    <table class="table table-striped" id="sportVenues-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Sport</th>
                <th>Venue</th>
                <th>Time From</th>
                <th>Time To</th>
                {{-- <th>Creator Id</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(count($sportVenues) > 0)
            @foreach($sportVenues as $i => $sportVenue)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $sportVenue->sport->name ?? '' }}</td>
                <td>{{ $sportVenue->venue->name ?? '' }}</td>
                <td>{{ $sportVenue->time_from }}</td>
                <td>{{ $sportVenue->time_to }}</td>
                {{-- <td>{{ $sportVenue->created_by }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['sportVenues.destroy', $sportVenue->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a class="btn btn-danger" href="{{ route('slots.index', ['venue_id' => $sportVenue->venue_id, 'sport_id' => $sportVenue->sport_id]) }}">Add Slot</a>
                        <a href="{{ route('sportVenues.show', [$sportVenue->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('sportVenues.edit', [$sportVenue->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        @else
        <td colspan="6">No Data</td>
        @endif
        </tbody>
    </table>
</div>