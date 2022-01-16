<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ImageSliders
 * @package App\Models
 * @version January 16, 2022, 10:31 am UTC
 *
 * @property string $name
 * @property int10 $is_active
 */
class ImageSlider extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;
    use HasFactory;

    public $table = 'image_sliders';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->crop('crop-center', 128, 128)
            ->sharpen(7);
    }

    
}
