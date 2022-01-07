<?php

namespace App\Http\Repositories;

class MediaRepository
{
    public static function store($request, $model, $index, $modelName, $mediaCollection)
    {
        $file = 'file' . $index;
        if ($request->has($file)) {
            $extension_length = strlen($request->file($file)->getClientOriginalExtension());
            $filename_without_extension = substr($request->file($file)->getClientOriginalName(), 0, (0 - $extension_length - 1));
            $filename = str_replace('.', '-', $filename_without_extension) . '.' . $request->file($file)->getClientOriginalExtension();

            $model->addMedia($request->file($file))
                ->setFileName($filename)
                ->withCustomProperties(['type' => $modelName, 'id' => $model->id, 'slug' => $model->id, 'description' => htmlspecialchars($request->get($file . '_description'))])
                ->toMediaCollection($mediaCollection);
        }
    }
}
