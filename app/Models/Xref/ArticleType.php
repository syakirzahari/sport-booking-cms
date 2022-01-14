<?php

namespace App\Models\Xref;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ArticleTypes
 * @package App\Models
 * @version January 14, 2022, 6:01 pm UTC
 *
 * @property string $name
 */
class ArticleType extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'xref_article_types';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
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

    
}
