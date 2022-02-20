<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SlotAvailability
 * @package App\Models
 * @version February 20, 2022, 3:50 pm UTC
 *
 * @property string $date
 * @property time $time_from
 * @property time $time_to
 */
class SlotAvailability extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'slot_availabilities';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'date',
        'time_from',
        'time_to',
        'venue_slot_id',
        'rate',
        'is_available'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'date' => 'date',
        // 'time_from' => 'time',
        // 'time_to' => 'time',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    
}
