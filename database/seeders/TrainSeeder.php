<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();

        $newTrain -> company = "Trenitalia";
        $newTrain -> departure_station = "Torino";
        $newTrain -> arrival_station = "Milano";
        $newTrain -> departure = "2024-04-12 12:17:00";
        $newTrain -> arrival = "2024-04-12 13:32:00";
        $newTrain -> code = "73e42d";
        $newTrain -> carriages_number = 12;
        $newTrain -> is_on_time = true;
        $newTrain -> is_cancelled = false;
        
        $newTrain -> save();
    }
}
