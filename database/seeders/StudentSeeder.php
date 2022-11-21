<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $value)
        {
            DB::table('students')->insert([
                'name'=>$faker->name(),
                'city'=>$faker->city(),
                'fees'=>$faker->numberBetween($min = 1000, $max = 9000),
            ]);
        }
    }
}