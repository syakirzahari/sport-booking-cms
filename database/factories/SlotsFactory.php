<?php

namespace Database\Factories;

use App\Models\Slot;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlotsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sport_id' => $this->faker->word,
        'venue_id' => $this->faker->word,
        'court_name' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
