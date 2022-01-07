<?php

namespace App\Libraries;

class SportMenuDataPreparation
{
    public static function fetchSingle($venues): array
    {
       // media
        $media = $venues->media()->where('collection_name', 'venue')->orderBy('created_at', 'desc')->limit(1)->get();
        $media_data = [];

        foreach ($media as $medium) {
            $media_data[] = [
                'name' => $medium->name,
                'type' => $medium->mime_type,
                'path' => $medium->getUrl(),
            ];
        }

        return [
            'id' => $venues->id,
            'name' => $venues->name,
            'description' => $venues->description,
            'address' => $venues->address,
            'district' => $venues->district->name,
            'district_id' => $venues->district_id,
            'state' => $venues->state->name,
            'state_id' => $venues->state_id,
            'latitude' => $venues->lat,
            'longitude' => $venues->lng,
            'tel_no' => $venues->telephone_number,
            'vendor' => $venues->vendor->name,
            'media' => $media_data,
        ];
    }
}
