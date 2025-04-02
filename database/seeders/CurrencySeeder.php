<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('currencies')->insert([
            'name' => 'Dollar',
            'symbol' => '$',
            'exchange_rate' => 62.32
        ]);

        \DB::table('currencies')->insert([
            'name' => 'Peso Dominicano',
            'symbol' => '$RD',
            'exchange_rate' => 0
        ]);

    }
}
