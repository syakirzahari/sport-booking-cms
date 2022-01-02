<div class="table-responsive-sm">
    <table class="table table-striped" id="articles-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Content</th>
        <th>Article Type</th>
        <th>Creator</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @if(count($articles) > 0)
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
            <td>{{ $article->content }}</td>
            <td>{{ $article->article_type_id }}</td>
            <td>{{ $article->creator->name }}</td>
                <td>
                    {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('articles.show', [$article->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('articles.edit', [$article->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        @else
        <td colspan="5">No Data</td>
        @endif
        </tbody>
    </table>
</div>