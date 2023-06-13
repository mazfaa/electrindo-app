<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'product' => 'Microsoft Azure',
                'qty' => 10,
                'price' => 250
            ],

            [
                'product' => 'Microsoft 365',
                'qty' => 15,
                'price' => 400
            ],

            [
                'product' => 'Microsoft Surface Laptop 4',
                'qty' => 20,
                'price' => 700
            ],
        ])
        ->each(fn ($product) => Product::create($product));
    }
}
