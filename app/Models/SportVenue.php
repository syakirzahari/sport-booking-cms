<?php

namespace App\Models;

use Eloquent as Model;
use App\Models\Xref\Sport;
use App\Models\Venue;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SportVenue
 * @package App\Models
 * @version January 2, 2022, 2:56 pm UTC
 *
 * @property integer $sport_id
 * @property integer $venue_id
 * @property string|\Carbon\Carbon $time_from
 * @property string|\Carbon\Carbon $time_to
 * @property integer $creator_id
 */
class SportVenue extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'sport_venues';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'sport_id',
        'venue_id',
        'time_from',
        'time_to',
        'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'sport_id' => 'integer',
        'venue_id' => 'integer',
        'time_from' => 'datetime',
        'time_to' => 'datetime',
        'creator_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function sport()
    {
        return $this->belongsTo(Sport::class, 'sport_id');
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }
    
}
