<?php

namespace App\Http\Controllers;

use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaController extends AppBaseController
{
    /**
     * Display the specified Bank.
     *
     * @param \Spatie\MediaLibrary\MediaCollections\Models\Media $media
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Media $media)
    {
        $file = base64_encode(file_get_contents($media->getPath()));
        $mime = $media->mime_type;

        return view('media.show', compact('file', 'mime'));
    }
}
