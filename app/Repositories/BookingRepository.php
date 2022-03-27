<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Repositories\BaseRepository;

/**
 * Class BookingRepository
 * @package App\Repositories
 * @version March 27, 2022, 2:29 pm UTC
*/

class BookingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'booking_no',
        'slot_id',
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Booking::class;
    }
}
