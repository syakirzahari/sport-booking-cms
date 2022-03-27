<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'booking_no' => $this->booking_no,
            'slot_id' => $this->slot_id,
            'venue_id' => $this->venue_id,
            'is_deposit' => $this->is_deposit,
            'is_full' => $this->is_full,
            'payment_status' => $this->payment_status,
            'is_refund' => $this->is_refund,
            'total_amount' => $this->total_amount,
            'booked_by' => $this->booked_by,
            'collected_by' => $this->collected_by,
            'deleted_at' => $this->deleted_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
