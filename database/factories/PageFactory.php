<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PageFactory extends Factory
{
    protected static $titlesUsed = [];

    public function definition(): array
    {
        $title = $this->generateUniqueTitle();
        $slug = Str::slug($title);
        
        return [
            'title' => $title,
            'slug' => $slug,
            'content' => $this->generateContent(),
        ];
    }

    protected function generateUniqueTitle(): string
    {
        $titles = [
            'Our History', 'Quality Standards', 'Research & Development',
            'Clinical Partners', 'Career Opportunities', 'News & Events',
            'Product Catalog', 'Shipping Policy', 'Return Policy',
            'Payment Methods', 'Client Testimonials', 'Case Studies',
            'Technology', 'Innovation', 'Sustainability'
        ];

        $availableTitles = array_diff($titles, self::$titlesUsed);
        
        if (empty($availableTitles)) {
            // If we run out of predefined titles, generate unique ones
            $title = $this->faker->unique()->words(3, true);
        } else {
            $title = $this->faker->randomElement($availableTitles);
        }

        self::$titlesUsed[] = $title;
        return $title;
    }

    protected function generateContent(): string
    {
        $content = '<h1>' . fake()->sentence(6) . '</h1>';
        $content .= '<p>' . fake()->paragraphs(3, true) . '</p>';
        $content .= '<h2>' . fake()->sentence(4) . '</h2>';
        $content .= '<ul><li>' . implode('</li><li>', fake()->sentences(4)) . '</li></ul>';
        
        return $content;
    }
}