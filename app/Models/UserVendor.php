<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Article
 * @package App\Models
 * @version January 2, 2022, 2:14 pm UTC
 *
 * @property string $title
 * @property string $content
 * @property integer $article_type_id
 */
class UserVendor extends Model
{
    public $table = 'user_vendors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'venue_id',
        'vendor_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    
}
