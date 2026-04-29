<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_images')->insert([
            ['product_id' => 1, 'image_url' => 'tote1.jpg'],
            ['product_id' => 1, 'image_url' => 'tote2.jpg'],
            ['product_id' => 2, 'image_url' => 'sling1.jpg'],
        ]);
    }
}
