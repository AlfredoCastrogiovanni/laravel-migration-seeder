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
        // for($i = 0; $i < 200; $i++) {
        //     $actualTrain = new Train();
        //     $actualTrain->company = $faker->word();
        //     $actualTrain->departure_station = $faker->word();
        //     $actualTrain->arrival_station = $faker->word();
        //     $actualTrain->departure_time = $faker->dateTime();
        //     $actualTrain->arrival_time = $faker->dateTime();
        //     $actualTrain->train_code = $faker->randomNumber(5, true);
        //     $actualTrain->number_of_wagon = $faker->randomNumber(2, false);
        //     $actualTrain->on_schedule = $faker->boolean();
        //     $actualTrain->cancelled = $faker->boolean();
        //     $actualTrain->save();
        // }

        // BONUS
        $csvFile = fopen(base_path("database/data/trains.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Train::create([
                    "company" => $data['0'],
                    "departure_station" => $data['1'],
                    "arrival_station" => $data['2'],
                    "departure_time" => $data['3'],
                    "arrival_time" => $data['4'],
                    "train_code" => $data['5'],
                    "number_of_wagon" => $data['6'],
                    "on_schedule" => $data['7'],
                    "cancelled" => $data['8'],
                ]);    
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
