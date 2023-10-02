<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Elektronika'],
            ['name' => 'Moda'],
            ['name' => 'Dom i ogród'],
            ['name' => 'Supermarket'],
            ['name' => 'Dziecko'],
            ['name' => 'Uroda'],
            ['name' => 'Zdrowie'],
            ['name' => 'Kultura i rozrywka'],
            ['name' => 'Sport i turystyka'],
            ['name' => 'Motoryzacja'],
            ['name' => 'Nieruchomości'],
            ['name' => 'Kolekcje i sztuka'],
            ['name' => 'Firma i usługi'],
        ]);
    }
}
