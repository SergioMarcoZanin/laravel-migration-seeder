<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<30;$i++){
            $newTrain= new Train();
            $newTrain->company=$faker->randomElement(['Trenitalia','Italo']);
            $newTrain->departure_station=$faker->city();
            $newTrain->arrival_station=$faker->city();
            $newTrain->departure_time=$faker->dateTimeBetween('-1 week', '+2 week');
            $newTrain->arrival_time=$faker->dateTimeBetween('-1 week', '+2 week');
            $newTrain->train_code=$faker->randomNumber(5, true);
            $newTrain->wagons=rand(1, 10);
            $newTrain->is_in_time=rand(0, 1);
            $newTrain->is_cancelled=rand(0, 1);
            $newTrain->save();
        }
    }
}