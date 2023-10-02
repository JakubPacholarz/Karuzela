<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\OrdersTableSeeder;
use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\PaymentsTableSeeder;
use Database\Seeders\ProductTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);

    }
}
