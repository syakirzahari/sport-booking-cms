<div class="table-responsive-sm">
    <table class="table table-striped" id="vendors-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Is Active</th>
        <th>Telephone Number</th>
        <th>Ssm Number</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vendors as $vendor)
            <tr>
                <td>{{ $vendor->name }}</td>
            <td>{{ $vendor->is_active }}</td>
            <td>{{ $vendor->telephone_number }}</td>
            <td>{{ $vendor->ssm_number }}</td>
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
        </tbody>
    </table>
</div>