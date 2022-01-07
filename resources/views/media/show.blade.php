@if(strpos($mime, 'image/') !== false)
    <img src="data:{{$mime}};base64,{{$file}}" alt="image" style="max-width: 80%;">
@else
    <a download="filename" href="data:{{$mime}};base64,{{$file}}">Download</a>
@endif
