<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\Models\Media as BaseModel;

class Media extends Model
{
    use SoftDeletes;

    public $table = 'media';

    public $fillable = [];
}
