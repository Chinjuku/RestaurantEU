<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate 30 fake employee
        for ($i = 0; $i < 5; $i++) {
            DB::table('employee')->insert([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'roles' => $faker->randomElement(['manager', 'chef', 'cashier', 'waiter']),
                'createdAt' => $faker->date(),
            ]);
        } 
    }
}
