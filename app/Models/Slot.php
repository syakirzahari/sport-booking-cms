<?php

namespace App\Models;

use Eloquent as Model;
use App\Models\Xref\Sport;
use App\Models\Venue;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Slot
 * @package App\Models
 * @version February 20, 2022, 4:36 am UTC
 *
 * @property int $sport_id
 * @property int $venue_id
 * @property varchar255 $court_name
 */
class Slot extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'venue_slots';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'sport_id',
        'venue_id',
        'court_name'
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

    public function sport()
    {
        return $this->belongsTo(Sport::class, 'sport_id');
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }

    public function availability(){
        return $this->hasMany(SlotAvailability::class);
    }
}
