<div class="table-responsive-sm">
    <table class="table table-striped" id="vendors-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
        <th>Is Active</th>
        <th>Telephone Number</th>
        <th>SSM Number</th>
        <th>Created At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @if(count($vendors) > 0)
        @foreach($vendors as $i => $vendor)
            <tr>
                <td> {{ $i+1 }}</td>
                <td>{{ $vendor->name }}</td>
            <td>{{ $vendor->is_active }}</td>
            <td>{{ $vendor->telephone_number ?? '-' }}</td>
            <td>{{ $vendor->ssm_number }}</td>
            <td>{{ $vendor->created_at }}</td>
                <td>
                    {!! Form::open(['route' => ['vendors.destroy', $vendor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vendors.show', [$vendor->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('vendors.edit', [$vendor->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
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