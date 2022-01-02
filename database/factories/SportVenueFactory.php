<?php

namespace Database\Factories;

use App\Models\SportVenue;
use Illuminate\Database\Eloquent\Factories\Factory;

class SportVenueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SportVenue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sport_id' => $this->faker->randomDigitNotNull,
        'venue_id' => $this->faker->randomDigitNotNull,
        'time_from' => $this->faker->date('Y-m-d H:i:s'),
        'time_to' => $this->faker->date('Y-m-d H:i:s'),
        'creator_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
