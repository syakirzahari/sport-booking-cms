<?php

namespace App\Libraries;

class ImageSliderDataPreparation
{
    public static function fetchSingle($slider): array
    {
        // media
        $media = $slider->media()->where('collection_name', 'ImageSlider')->orderBy('created_at', 'desc')->limit(1)->get();
        $media_data = [];

        foreach ($media as $medium) {
            $media_data[] = [
                'name' => $medium->name,
                'type' => $medium->mime_type,
                'path' => $medium->getUrl(),
            ];
        }

        return [
            'id' => $slider->id,
            'media' => $media_data,
        ];
    }
}
