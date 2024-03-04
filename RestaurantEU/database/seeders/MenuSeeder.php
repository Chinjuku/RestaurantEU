<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // Generate 10 fake reservations
        for ($i = 0; $i < 5; $i++) {
            DB::table('menu')->insert([
                'menu_name' => $faker->firstname,
                'price' => $faker->numberBetween(59, 399),
                'menu_img' => $faker->imageUrl(360, 360, 'foods', true, 'Italian', true, 'png'),
                'detail' => $faker->paragraph(),
                'category_id'  => $faker->numberBetween(1, 3),
                'types' => $faker->randomElement(['เมนูเส้น', 'ข้าว/อื่นๆ', 'สเต็ก', 'กาแฟ/ชา', 'ไวน์', 'ของหวาน', 'อื่นๆ'])
            ]);
        }
    }
}
