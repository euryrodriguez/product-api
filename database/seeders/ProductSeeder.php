<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('products')->insert([
            'name' => 'Cerveza Presidente',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, maxime id null',
            'price' => '62.32',
            'currency_id' => 1,
            'tax_cost' => 10,
            'manufacturing_cost' => 10
        ]);
    }
}
