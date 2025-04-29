<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'name' => $this->faker->words(3, true),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->paragraphs(3, true),
            'image_url' => $this->faker->imageUrl(640, 480, 'medical'),
            'whatsapp_link' => 'https://wa.me/'. $this->faker->numerify('##########'),
            'is_featured' => $this->faker->boolean(30), // 30% chance to be featured
            'order' => $this->faker->numberBetween(0, 100),
        ];
    }


    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_featured' => true,
        ]);
    }
}
