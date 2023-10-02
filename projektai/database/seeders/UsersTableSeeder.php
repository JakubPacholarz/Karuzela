<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'JanKowalski',
                'password' => 'haslo123',
                'email' => 'jan.kowalski@example.com',
                'phone_number' => '123456789',
                'address' => 'ul. Przykładowa 1',
            ],
            [
                'username' => 'AnnaNowak',
                'password' => 'test456',
                'email' => 'anna.nowak@example.com',
                'phone_number' => '987654321',
                'address' => 'ul. Inna 2',
            ],
            [
                'username' => 'PiotrZielinski',
                'password' => 'passwd789',
                'email' => 'piotr.zielinski@example.com',
                'phone_number' => '111222333',
                'address' => 'ul. Różana 3',
            ],
        ]);
    }
}

