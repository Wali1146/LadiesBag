<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orderShipment extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shipments')->insert([
            [
                'order_id' => 1,
                'courier' => 'JNE',
                'tracking_number' => 'JNE123456'
            ]
        ]);
    }
}
