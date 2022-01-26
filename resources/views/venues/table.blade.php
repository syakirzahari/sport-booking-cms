<div class="table-responsive-sm">
    <table class="table table-striped" id="venues-table">
        <thead>
            <tr>
                <th>#<th>
                {{-- <th>Image</th> --}}
                <th>Name</th>        
                <th>Description</th>
                <th>Address</th>
                <th>District</th>
                <th>State</th>
                <th>Telephone Number</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @if(count($venues) > 0)
        @foreach($venues as $i => $venue)
            <tr>
                <td>{{ $i+1 }}</td>
                <td><img src="{{$venue->getFirstMediaUrl('venue', 'thumb')}}" / width="120px"></td>
                <td>{{ $venue->name }}</td>
                <td>{{ $venue->description }}</td>
                <td>{{ $venue->address }}</td>
                <td>{{ $venue->district->name }}</td>
                <td>{{ $venue->state->name }}</td>
                <td>{{ $venue->telephone_number }}</td>
                <td>{{ $venue->lat }}</td>
                <td>{{ $venue->lng }}</td>
                <td>
                    {!! Form::open(['route' => ['venues.destroy', $venue->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('venues.show', [$venue->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('venues.edit', [$venue->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
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