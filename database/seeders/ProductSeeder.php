<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Create 20 regular products
        Product::factory()
            ->count(20)
            ->create();

        // Create 5 featured products
        Product::factory()
            ->count(5)
            ->featured()
            ->create();
    }
}