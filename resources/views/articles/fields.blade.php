<div class="form-group col-sm-6">
    {{ Form::label('article_type_id', 'Type:') }}
    {{ Form::select('article_type_id', $type, null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('description', 'Description:') }}
    {{ Form::textarea('content', null, ['class' => 'form-control', 'rows'=> 10]) }}
</div>