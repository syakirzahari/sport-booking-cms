<div class="table-responsive-sm">
    <table class="table table-striped" id="sports-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sports as $i => $sport)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $sport->name }}</td>
                <td>
                    {!! Form::open(['route' => ['sports.destroy', $sport->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sports.show', [$sport->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('sports.edit', [$sport->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>