<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Faker\Factory as Faker;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Adjust loop count as needed
        for ($i = 0; $i < 1000; $i++) {
            Movie::create([
                'movie_type' => $faker->numberBetween(1, 3),
                'title' => $faker->sentence(3),
                'year' => $faker->year,
                'minutes' => $faker->numberBetween(60, 240),
            ]);
        }
    }
}
