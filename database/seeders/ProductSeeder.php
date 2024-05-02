<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'code_product' => 'B01',
                'name_product' => 'Fiction Book',
                'price_product' => '92750',
                'desc_product' => 'The Great Gatsby Book',
                'unit_id' => 1
            ],
            [
                'code_product' => 'B02',
                'name_product' => 'Non Fiction Book',
                'price_product' => '88550',
                'desc_product' => 'Atomic Habits Book',
                'unit_id' => 2
            ],
        ]);
    }
}
