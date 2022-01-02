<?php

namespace App\Models;

use Eloquent as Model;
use App\Models\Xref\District;
use App\Models\Xref\State;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Venue
 * @package App\Models
 * @version January 2, 2022, 1:19 pm UTC
 *
 * @property string $name
 * @property string $address
 * @property integer $district_id
 * @property integer $state_id
 * @property string $lat
 * @property string $lng
 * @property integer $owner_id
 */
class Venue extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'venues';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'address',
        'district_id',
        'state_id',
        'lat',
        'lng',
        'owner_id',
        'telephone_number'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'address' => 'string',
        'district_id' => 'integer',
        'state_id' => 'integer',
        'lat' => 'string',
        'lng' => 'string',
        'owner_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string',
        'lat' => 'required',
        'lng' => 'required'
    ];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    
}
