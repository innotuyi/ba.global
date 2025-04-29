<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // First create the essential categories
        $essentialCategories = [
            ['name' => 'Equipment', 'slug' => 'equipment'],
            ['name' => 'Consumables', 'slug' => 'consumables'],
            ['name' => 'Reagents', 'slug' => 'Reagents'],
            ['name' => 'Equip. & Cons', 'slug' => 'Equip. & Cons'],
            ['name' => 'B', 'slug' => 'B'],
            ['name' => 'C', 'slug' => 'C'],



           
        ];

        foreach ($essentialCategories as $category) {
            Category::firstOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }

        // Then create additional categories if needed
        if (Category::count() < 10) {
            $additionalNeeded = 10 - Category::count();
            Category::factory()
                ->count($additionalNeeded)
                ->create();
        }
    }
}