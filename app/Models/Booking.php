<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Booking
 * @package App\Models
 * @version March 27, 2022, 2:29 pm UTC
 *
 * @property \App\Models\User $bookedBy
 * @property \App\Models\User $collectedBy
 * @property \App\Models\VenueSlot $slot
 * @property \App\Models\Venue $venue
 * @property string $booking_no
 * @property integer $slot_id
 * @property integer $venue_id
 * @property integer $is_deposit
 * @property integer $is_full
 * @property string $payment_status
 * @property integer $is_refund
 * @property integer $total_amount
 * @property integer $booked_by
 * @property integer $collected_by
 */
class Booking extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'bookings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'booking_no',
        'slot_id',
        'slot_availability_id',
        'venue_id',
        'is_deposit',
        'is_full',
        'payment_status',
        'is_refund',
        'total_amount',
        'booked_by',
        'collected_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'booking_no' => 'string',
        'slot_id' => 'integer',
        'venue_id' => 'integer',
        'is_deposit' => 'integer',
        'is_full' => 'integer',
        'payment_status' => 'string',
        'is_refund' => 'integer',
        'total_amount' => 'integer',
        'booked_by' => 'integer',
        'collected_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'booking_no' => 'nullable|string|max:255',
        'slot_id' => 'required',
        'venue_id' => 'required',
        'is_deposit' => 'required|integer',
        'is_full' => 'required|integer',
        'payment_status' => 'nullable|string|max:255',
        'is_refund' => 'required|integer',
        'total_amount' => 'nullable|integer',
        'booked_by' => 'required',
        'collected_by' => 'nullable',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bookedBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'booked_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function collectedBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'collected_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function slot()
    {
        return $this->belongsTo(\App\Models\Slot::class, 'slot_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function venue()
    {
        return $this->belongsTo(\App\Models\Venue::class, 'venue_id');
    }

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function slotAvailability()
    {
        return $this->belongsTo(\App\Models\SlotAvailability::class, 'slot_availability_id');
    }
}
