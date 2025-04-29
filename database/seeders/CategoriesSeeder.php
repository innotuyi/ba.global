<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Physiotherapy Equipment', 'slug' => 'physiotherapy-equipment'],
            ['name' => 'Physiotherapy Consumables', 'slug' => 'physiotherapy-consumables'],
        ]);
    }
}
