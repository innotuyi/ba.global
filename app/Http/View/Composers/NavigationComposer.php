<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use Illuminate\View\View;

class NavigationComposer
{
    public function compose(View $view)
    {
        // Option A: Filter by specific category names
        $serviceCategories = Category::with(['products' => function($query) {
                $query->orderBy('order');
            }])
            ->whereIn('name', ['Physiotherapy', 'Laboratory', 'Furniture'])
            ->get();
        
        // Option B: Get all categories with products
        // $serviceCategories = Category::with('products')->get();
        
        $view->with('serviceCategories', $serviceCategories);
    }
}