<?php

namespace App\Models\Xref;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sport
 * @package App\Models
 * @version January 2, 2022, 1:15 pm UTC
 *
 * @property string $name
 */
class Sport extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'xref_sports';
    

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
