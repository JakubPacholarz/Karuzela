<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('orders')->insert([
            [
                'buyer_id' => 4,
                'seller_id' => 1,
                'product_id' => 4,
                'price' => 1499.99,
                'status' => 'placed',
            ],
            [
                'buyer_id' => 5,
                'seller_id' => 3,
                'product_id' => 5,
                'price' => 199.00,
                'status' => 'paid',
            ],
            [
                'buyer_id' => 2,
                'seller_id' => 4,
                'product_id' => 6,
                'price' => 99.99,
                'status' => 'shipped',
            ],
            [
                'buyer_id' => 1,
                'seller_id' => 5,
                'product_id' => 7,
                'price' => 2.99,
                'status' => 'received',
            ],
            [
                'buyer_id' => 3,
                'seller_id' => 2,
                'product_id' => 8,
                'price' => 49.99,
                'status' => 'return',
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

