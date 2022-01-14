<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Xref\ArticleType;

class XrefArticleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_seeds = [
            ['name' => 'About Us'],
            ['name' => 'Privacy & Policy'],
        ];

        foreach ($data_seeds as $seed) {
            ArticleType::create($seed);
        }
    }
}
