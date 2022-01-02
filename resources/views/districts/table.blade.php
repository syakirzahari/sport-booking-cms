<div class="table-responsive-sm">
    <table class="table table-striped" id="districts-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>State</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($districts as $district)
            <tr>
                <td>{{ $district->name }}</td>
            <td>{{ $district->state_id }}</td>
                <td>
                    {!! Form::open(['route' => ['districts.destroy', $district->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('districts.show', [$district->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('districts.edit', [$district->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>