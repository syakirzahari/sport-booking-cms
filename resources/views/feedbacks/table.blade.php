<div class="table-responsive-sm">
    <table class="table table-striped" id="feedback-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Content</th>
        <th>Created By</th>
        <th>Is Replied</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($feedback as $feedback)
            <tr>
                <td>{{ $feedback->title }}</td>
            <td>{{ $feedback->content }}</td>
            <td>{{ $feedback->createdBy->name }}</td>
            <td>{{ $feedback->is_replied }}</td>
                <td>
                    {!! Form::open(['route' => ['feedbacks.destroy', $feedback->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('feedbacks.show', [$feedback->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('feedbacks.edit', [$feedback->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>