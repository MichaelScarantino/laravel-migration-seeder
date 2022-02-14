<?php

use Illuminate\Database\Seeder;
use App\Holiday;
use Faker\Generator as Faker;

class HolidaysTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {

            $types = [
                'Hotel',
                'flat',
                'camping'
            ];

            $new_holiday = new Holiday();
            $new_holiday->city = $faker->city();
            $new_holiday->departure = $faker->citySuffix();
            $new_holiday->arrival = $faker->citySuffix();
            $new_holiday->departure_time = $faker->time();
            $new_holiday->arrival_time = $faker->time();
            $new_holiday->address = $faker->streetAddress();
            $new_holiday->type = $faker->randomElement($types);
            $new_holiday->description = $faker->text(500);
            $new_holiday->price = $faker->rand(400, 10000);
            $new_holiday->save();

        }
    }
}
