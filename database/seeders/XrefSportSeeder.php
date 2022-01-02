<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Xref\Sport;

class XrefSportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_seeds = [
            ['name' => 'Football'],
            ['name' => 'Futsal'],
            ['name' => 'Badminton'],
        ];

        foreach ($data_seeds as $seed) {
            Sport::create($seed);
        }
    }
}
