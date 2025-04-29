<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    protected function getEssentialPages(): array
    {
        return [
            [
                'title' => 'About Us',
                'slug' => 'about-us',
                'content' => $this->generateAboutContent()
            ],
            [
                'title' => 'Our Mission',
                'slug' => 'our-mission',
                'content' => $this->generateMissionContent()
            ],
            [
                'title' => 'Services',
                'slug' => 'services',
                'content' => $this->generateServicesContent()
            ],
            [
                'title' => 'Contact',
                'slug' => 'contact',
                'content' => $this->generateContactContent()
            ],
        ];
    }

    public function run(): void
    {
        // First ensure essential pages exist
        foreach ($this->getEssentialPages() as $pageData) {
            Page::firstOrCreate(
                ['slug' => $pageData['slug']],
                $pageData
            );
        }

        // Then create additional pages if we don't have enough
        $pagesToCreate = max(0, 10 - Page::count());
        if ($pagesToCreate > 0) {
            Page::factory()
                ->count($pagesToCreate)
                ->create();
        }
    }

    protected function generateAboutContent(): string
    {
        return '<h1>About Us</h1><p>'.fake()->paragraphs(3, true).'</p>';
    }

    protected function generateMissionContent(): string
    {
        return '<h1>Our Mission</h1><p>'.fake()->paragraphs(3, true).'</p>';
    }

    protected function generateServicesContent(): string
    {
        return '<h1>Services</h1><p>'.fake()->paragraphs(3, true).'</p>';
    }

    protected function generateContactContent(): string
    {
        return '<h1>Contact Us</h1><p>'.fake()->paragraphs(3, true).'</p>';
    }
}