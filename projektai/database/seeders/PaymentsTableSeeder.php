<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('payments')->insert([
            [
                'order_id' => 4,
                'payment_method' => 'Karta debetowa',
                'is_successful' => true,
            ],
            [
                'order_id' => 5,
                'payment_method' => 'Przelew bankowy',
                'is_successful' => true,
            ],
            [
                'order_id' => 2,
                'payment_method' => 'Płatność online',
                'is_successful' => true,
            ],
            [
                'order_id' => 1,
                'payment_method' => 'Gotówka',
                'is_successful' => true,
            ],
            [
                'order_id' => 3,
                'payment_method' => 'Karta kredytowa',
                'is_successful' => true,
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
