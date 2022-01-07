<tr>
    @foreach($media as $i => $medium)
        <td width="20%" style="vertical-align: top">
            <img
                alt="image"
                style="max-width:150px; max-height: 150px; text-align: center;"
{{--            src="https://placeimg.com/300/400/any"--}}
                src="data:{{$medium->mime_type}};base64,{{base64_encode(file_get_contents($medium->hasGeneratedConversion('thumb') ? $medium->getPath('thumb') : $medium->getPath()))}}"
            >
            <br><span>{{$medium->getCustomProperty('description') ?: ''}}</span>
        </td>

        @if(($i+1) % 4 == 0)
        </tr>
        <tr>
        @endif
    @endforeach
</tr>
