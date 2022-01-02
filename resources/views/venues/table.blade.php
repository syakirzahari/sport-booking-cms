<div class="table-responsive-sm">
    <table class="table table-striped" id="venues-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Address</th>
        <th>District Id</th>
        <th>State Id</th>
        <th>Lat</th>
        <th>Lng</th>
        <th>Owner Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($venues as $venue)
            <tr>
                <td>{{ $venue->name }}</td>
            <td>{{ $venue->address }}</td>
            <td>{{ $venue->district_id }}</td>
            <td>{{ $venue->state_id }}</td>
            <td>{{ $venue->lat }}</td>
            <td>{{ $venue->lng }}</td>
            <td>{{ $venue->owner_id }}</td>
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
        </tbody>
    </table>
</div>