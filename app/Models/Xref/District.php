<?php

namespace App\Models\Xref;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class District
 * @package App\Models
 * @version January 2, 2022, 1:13 pm UTC
 *
 * @property string $name
 * @property integer $state_id
 */
class District extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'xref_districts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'state_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'state_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
