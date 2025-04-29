<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavigationItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('navigation_items')->insert([
            ['name' => 'HOME', 'slug' => 'home', 'order' => 1],
            ['name' => 'ABOUT US', 'slug' => 'about-us', 'order' => 2],
            ['name' => 'OUR MISSION', 'slug' => 'our-mission', 'order' => 3],
            ['name' => 'SERVICE', 'slug' => 'service', 'order' => 4],
            ['name' => 'MARCH', 'slug' => 'march', 'order' => 5],
        ]);
    }
}
