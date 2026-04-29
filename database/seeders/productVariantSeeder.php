<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_variants')->insert([
            [
                'product_id' => 1,
                'color' => 'Beige',
                'size' => 'M',
                'stock' => 5
            ],
            [
                'product_id' => 1,
                'color' => 'Black',
                'size' => 'L',
                'stock' => 5
            ]
        ]);
    }
}
