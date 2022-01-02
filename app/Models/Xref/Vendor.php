<?php

namespace App\Models\Xref;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Vendor
 * @package App\Models
 * @version January 2, 2022, 3:03 pm UTC
 *
 * @property string $name
 * @property integer $is_active
 * @property string $telephone_number
 * @property string $ssm_number
 */
class Vendor extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'vendors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'is_active',
        'telephone_number',
        'ssm_number'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'is_active' => 'integer',
        'telephone_number' => 'string',
        'ssm_number' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
