<div class="d-flex flex-wrap justify-content-start">
    @forelse($media as $medium)
            <tr>
                <td>
                    @if(strpos($medium->mime_type, 'image/') !== false)
                        @if(in_array(Route::currentRouteName(),['news.edit','books.edit','restoration.incomplete.edit','grant.grants.edit',
                        'project.monitoring.edit','project.reports.edit','grant.monitoring.edit','restoration.reports.edit','grant.incomplete.edit']))
                        <input class="mediaTodelete" type="checkbox" name='mediaTodelete[]' value="{{$medium->id}}" >
                        <a href="{{ route('media.show', $medium->id) ?? '#' }}"
                        class="btn btn-sm btn-default"
                        target="_blank">
                            <img alt="pdf"
                                style="max-width:200px"
                                src="data:{{$medium->mime_type}};base64,{{base64_encode(file_get_contents($medium->hasGeneratedConversion('thumb') ? $medium->getPath('thumb') : $medium->getPath()))}}">
                        </a>
                        @endif
                    @else 
                    <div class="class">
                        <input class="mediaTodelete" type="checkbox" name='mediaTodelete[]' value="{{$medium->id}}" style="margin:10px;">
                    </div>
                    <div>
                    <a download="filename"
                        href="data:{{$medium->mime_type}};base64,{{base64_encode(file_get_contents($medium->getPath()))}}" class="btn btn-info btn-sm">Muat Turun</a>
                    </div>
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
</div>


