<div class="d-flex flex-wrap justify-content-start">
    @foreach($media as $medium)
        <div class="p-2">
            @if(strpos($medium->mime_type, 'image/') !== false)
                    <a href="{{ route('media.show', $medium->id) ?? '#' }}"
                    class="btn btn-sm btn-default"
                    target="_blank">
                        <img alt="image"
                src="data:{{$medium->mime_type}};base64,{{base64_encode(file_get_contents($medium->hasGeneratedConversion('thumb') ? $medium->getPath('thumb') : $medium->getPath()))}}">
                    </a>
            @else
                <a download="filename"
                   href="data:{{$medium->mime_type}};base64,{{base64_encode(file_get_contents($medium->getPath()))}}">Download</a>
            @endif
            <p>{{$medium->getCustomProperty('description')}}</p>
        </div>
    @endforeach
</div>


