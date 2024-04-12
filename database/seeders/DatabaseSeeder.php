<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // dobbiamo chiamare qui il seeder che abbiamo appena creato
        $this->call([
            TrainSeeder::class,
        ]);
    }
}
