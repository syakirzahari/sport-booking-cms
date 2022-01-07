<h2>Senarai Nama Lampiran</h2>

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            @if(isset($is_editable) && $is_editable)
                <th width="3%">{{Form::checkbox('attachments_mass', null, null, ['onchange' => 'checkAll()', 'id' => 'attachment_mass'])}}</th>
            @endif
            <th width="5%">No.</th>
            <th>Nama</th>
            <th width="50px">
                @if((isset($is_editable) && $is_editable))
                    {{ Form::button('<i class="fa fa-trash"></i>', [
                        'type' => 'button',
                        'class' => 'btn btn-danger btn-sm',
                        'id' => 'delete_btn',
                        'disabled' => '',
                       // 'onclick' => "deleteMassAttachment('".$complaint->slug."')",
                    ]) }}
                @endif
            </th>
        </tr>
        </thead>
        <tbody>
        @if(count($media) > 0)
            @forelse($media as $i => $medium)
                <tr>
                    @if(isset($is_editable) && $is_editable)
                        <td>
                            {{Form::checkbox('attachments[]', $medium->id, null, ['onchange' => 'updateSelection(this)'])}}
                        </td>
                    @endif
                    <td>{{$counter+$i}}</td>
                    <td>
                        {{ $medium->file_name }}
                    </td>
                    @if((isset($is_editable) && $is_editable) || (isset($is_showable) && $is_showable))
                        <td>
                            @if(strpos($medium->mime_type, 'image/') !== false)
                                <a href="{{ route('media.show', $medium->id) ?? '#' }}"
                                   class="btn btn-sm btn-default"
                                   target="_blank">
                                    <img alt="image"
                                         src="data:{{$medium->mime_type}};base64,{{base64_encode(file_get_contents($medium->getPath('thumb')))}}">
                                </a>
                            @else
                                <a download="filename"
                                   href="data:{{$medium->mime_type}};base64,{{base64_encode(file_get_contents($medium->getPath()))}}">Download</a>
                            @endif
                        </td>
                    @endif
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5">Tiada data ditemui.</td>
                    </tr>
                @endif
        </tbody>
    </table>
    {{$media->render()}}
</div>

@section('scripts2')
    @if(isset($is_editable) && $is_editable)
        <script>
            function updateSelection() {
                var selection = mapSelectionList('attachments[]')
                var count = selection.length
                console.log('selection count:', count)

                if (count > 0) {
                    console.log('disabled false')
                    $('#delete_btn').prop('disabled', false)
                } else {
                    console.log('disabled true')
                    $('#delete_btn').prop('disabled', true)
                }
            }
        </script>
    @endif
@endsection
