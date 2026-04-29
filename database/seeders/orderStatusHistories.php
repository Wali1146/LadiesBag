<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orderStatusHistories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_status_histories')->insert([
            ['order_id' => 1, 'status' => 'pending'],
            ['order_id' => 1, 'status' => 'packed'],
        ]);
    }
}
