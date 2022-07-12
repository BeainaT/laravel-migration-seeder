<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker; //import Faker
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $companies = ['GWR', 'Stansted Express', 'Gatwick Express', 'Amtrak', 'Soo Line Railroad'];
        for($i=0; $i < 20; $i++) {
            $newTrain = new Train();
            //set columns
            $newTrain->company = $companies[rand(0,(count($companies) - 1))];
            $newTrain->departure_station =  $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->train_code = $faker->numerify('#####');
            $newTrain->wagon = rand(1, 100);
            
            $newTrain->save(); //to insert new columns value setted
        }
    }
}
