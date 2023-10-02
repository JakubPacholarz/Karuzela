<?php

namespace Database\Seeders;

use App\Models\Studio;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Movie::truncate();
            Studio::truncate();
        });

        Studio::insert(
            [
                [
                    'name' => 'Toei', 'year' => '1948', 'workers' => '695',
                    'ceo' => 'Kōzō Morishita', 'country' => 'Japonia'
                ],
                [
                    'name' => 'MAPPA', 'year' => '2011', 'workers' => '360',
                    'ceo' => 'Masao Maruyama', 'country' => 'Japonia'
                ],
                [
                    'name' => 'Dreamworks', 'year' => '1994', 'workers' => '800',
                    'ceo' => 'Jeffrey Katzenberg', 'country' => 'USA'
                ],
                [
                    'name' => 'Pixar', 'year' => '1979', 'workers' => '1200',
                    'ceo' => 'Jim Moriss', 'country' => 'USA'
                ],
                [
                    'name' => 'Disney', 'year' => '1923', 'workers' => '220000',
                    'ceo' => 'Robert Iger', 'country' => 'USA'
                ],
                [
                    'name' => 'Netflix', 'year' => '1997', 'workers' => '12800',
                    'ceo' => 'Reed Hastings', 'country' => 'USA'
                ],
            ]
        );
    }
}
