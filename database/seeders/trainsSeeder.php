<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class trainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 200; $i++) {
            $actualTrain = new Train();
            $actualTrain->company = $faker->word();
            $actualTrain->departure_station = $faker->word();
            $actualTrain->arrival_station = $faker->word();
            $actualTrain->departure_time = $faker->dateTime();
            $actualTrain->arrival_time = $faker->dateTime();
            $actualTrain->train_code = $faker->randomNumber(5, true);
            $actualTrain->number_of_wagon = $faker->randomNumber(2, false);
            $actualTrain->on_schedule = $faker->boolean();
            $actualTrain->cancelled = $faker->boolean();
            $actualTrain->save();
        }
    }
}
