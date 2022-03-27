<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'booking_no' => $this->faker->word,
        'slot_id' => $this->faker->word,
        'venue_id' => $this->faker->word,
        'is_deposit' => $this->faker->randomDigitNotNull,
        'is_full' => $this->faker->randomDigitNotNull,
        'payment_status' => $this->faker->word,
        'is_refund' => $this->faker->randomDigitNotNull,
        'total_amount' => $this->faker->randomDigitNotNull,
        'booked_by' => $this->faker->word,
        'collected_by' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
