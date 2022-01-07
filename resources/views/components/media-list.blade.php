<table class="table table-bordered table-condensed">
    <thead>
    <tr>
        <th width="20%">Gambar</th>
        <th>Keterangan</th>
    </tr>
    </thead>
    @forelse($media as $medium)
        <tr>
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
            <td>
                {{$medium->getCustomProperty('description')}}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="2">Tiada Data</td>
        </tr>
    @endforelse
</table>
