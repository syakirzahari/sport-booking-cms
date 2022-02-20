<div class="table-responsive-sm">
    <table class="table table-striped" id="slots-table">
        <thead>
            <tr>
                <th>Court Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($slots as $slots)
            <tr>
            <td>{{ $slots->court_name }}</td>
                <td>
                    {!! Form::open(['route' => ['slots.destroy', $slots->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a class="btn btn-danger" href="">Add Time Availability</a>
                        <a href="{{ route('slots.show', [$slots->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('slots.edit', [$slots->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>