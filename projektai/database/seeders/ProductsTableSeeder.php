<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Telewizor Samsung',
                'description' => 'Nowy telewizor 4K o przekątnej 55 cali',
                'product_condition' => 'new',
                'price' => 1999.99,
                'category_id' => 1,
            ],
            [
                'name' => 'Kurtka zimowa',
                'description' => 'Ciepła kurtka z futerkiem w kolorze czarnym',
                'product_condition' => 'new',
                'price' => 209.49,
                'category_id' => 2,
            ],
            [
                'name' => 'Odkurzacz bezworkowy',
                'description' => 'Mocny odkurzacz do sprzątania',
                'product_condition' => 'used',
                'price' => 299.99,
                'category_id' => 3,
            ],
            [
                'name' => 'Smartfon iPhone 12',
                'description' => 'Nowy smartfon z ekranem OLED i potrójnym aparatem',
                'product_condition' => 'new',
                'price' => 1499.99,
                'category_id' => 1,
            ],
            [
                'name' => 'Sukienka wieczorowa',
                'description' => 'Elegancka sukienka z koronkowym wzorem',
                'product_condition' => 'new',
                'price' => 199.00,
                'category_id' => 2,
            ],
            [
                'name' => 'Kosiarka elektryczna',
                'description' => 'Efektywna kosiarka zasilana prądem',
                'product_condition' => 'used',
                'price' => 99.99,
                'category_id' => 3,
            ],
            [
                'name' => 'Mleko UHT',
                'description' => 'Półtłuste mleko w kartonie',
                'product_condition' => 'new',
                'price' => 2.99,
                'category_id' => 4,
            ],
            [
                'name' => 'Zabawka interaktywna',
                'description' => 'Zestaw klocków do budowania z dźwiękami i światłami',
                'product_condition' => 'new',
                'price' => 49.99,
                'category_id' => 5,
            ],
            [
                'name' => 'Krem nawilżający',
                'description' => 'Nawilżający krem do twarzy o działaniu antyoksydacyjnym',
                'product_condition' => 'new',
                'price' => 5.98,
                'category_id' => 6,
            ],
        ]);
    }
}
