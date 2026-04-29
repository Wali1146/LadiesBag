<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Elegant Tote Bag',
                'description' => 'Tas elegan cocok untuk kerja',
                'price' => 250000,
                'stock' => 10
            ],
            [
                'category_id' => 2,
                'name' => 'Casual Sling Bag',
                'description' => 'Tas santai untuk jalan',
                'price' => 150000,
                'stock' => 15
            ]
        ]);
    }
}
