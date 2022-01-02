<div class="table-responsive-sm">
    <table class="table table-striped" id="sportVenues-table">
        <thead>
            <tr>
                <th>Sport Id</th>
        <th>Venue Id</th>
        <th>Time From</th>
        <th>Time To</th>
        <th>Creator Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(count($sportVenues) > 0)
            @foreach($sportVenues as $sportVenue)
            <tr>
            <td>{{ $sportVenue->sport_id }}</td>
            <td>{{ $sportVenue->venue_id }}</td>
            <td>{{ $sportVenue->time_from }}</td>
            <td>{{ $sportVenue->time_to }}</td>
            <td>{{ $sportVenue->created_by }}</td>
                <td>
                    {!! Form::open(['route' => ['sportVenues.destroy', $sportVenue->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sportVenues.show', [$sportVenue->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('sportVenues.edit', [$sportVenue->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        @else
        <td colspan="7">No Data</td>
        @endif
        </tbody>
    </table>
</div>