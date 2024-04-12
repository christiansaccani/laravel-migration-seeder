<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
{
        // $newTrain -> company = "Trenitalia";
        // $newTrain -> departure_station = "Torino";
        // $newTrain -> arrival_station = "Milano";
        // $newTrain -> departure = "2024-04-12 12:17:00";
        // $newTrain -> arrival = "2024-04-12 13:32:00";
        // $newTrain -> code = "73e42d";
        // $newTrain -> carriages_number = 12;
        // $newTrain -> is_on_time = true;
        // $newTrain -> is_cancelled = false;

        for ($i=0; $i < 100; $i++) {

            $newTrain = new Train();

            $newTrain -> company = $faker->company();
            $newTrain -> departure_station = $faker->city();
            $newTrain -> arrival_station = $faker->city();
            $newTrain -> departure = $faker->dateTimeBetween('-1 day', '+1 week');
            $newTrain -> arrival = $faker->dateTimeBetween('-1 day', '+1 week');
            $newTrain -> code = $faker->unique()->randomNumber(6, true);
            $newTrain -> carriages_number = $faker->numberBetween(1, 10);
            $newTrain -> is_on_time = $faker->boolean();
            $newTrain -> is_cancelled = $faker->boolean();

            $newTrain -> save();
        }
    }
}
