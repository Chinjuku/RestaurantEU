<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1 ; $i <= 15 ; $i++) {
            DB::table('table')->insert(
                [
                    'table_id' => $i,
                    'isIdle' => false
                ]
            );
        }
    }
}
