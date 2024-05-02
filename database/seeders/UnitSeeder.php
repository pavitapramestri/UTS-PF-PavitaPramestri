<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->insert([
            [
                'code_unit' => 'P01',
                'name_unit' => 'Product'
            ],
            [
                'code_unit' => 'R01',
                'name_unit' => 'Room'
            ],
        ]);
    }
}
