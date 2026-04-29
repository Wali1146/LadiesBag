<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run()
    {
        $this->call([
            userSeeder::class,
            categorySeeder::class,
            productSeeder::class,
            productImageSeeder::class,
            productVariantSeeder::class,
            cartSeeder::class,
            cartItemsSeeder::class,
            orderSeeder::class,
            orderItems::class,
            orderPayment::class,
            orderShipment::class,
            orderStatusHistories::class,
            reviewSeeder::class,
            reviewImagesSeeder::class,
            wishlistSeeder::class,
        ]);
    }
}
