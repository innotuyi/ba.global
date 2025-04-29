<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected static $counter = 0;
    
    public function definition(): array
    {
        self::$counter++;
        
        return [
            'name' => 'Category ' . self::$counter,
            'slug' => 'category-' . self::$counter,
            'description' => $this->faker->paragraph(),
        ];
    }
}