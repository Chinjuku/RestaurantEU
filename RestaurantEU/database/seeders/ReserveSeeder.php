<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReserveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('reservation')->factory()->count(10)->create();
        $faker = Faker::create();

        // Generate 10 fake reservations
        for ($i = 0; $i < 5; $i++) {
            DB::table('reservation')->insert([
                'name' => $faker->name,
                'people_num' => $faker->numberBetween(1, 10),
                'phonenum' => $faker->phoneNumber,
                'time' => $faker->time(),
            ]);
        }
    }
}
