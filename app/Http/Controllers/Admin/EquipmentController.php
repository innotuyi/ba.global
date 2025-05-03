<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get counts by category NAME (adjust names to match your actual categories)
        $consumablesCount = Product::whereHas('category', function($query) {
            $query->where('name', 'Physiotherapy Consumables');
        })->count();
    
        $equipmentCount = Product::whereHas('category', function($query) {
            $query->where('name', 'Equipment');
        })->count();
    
        // Add other categories similarly...
    
        $categoryCount = Category::count();
        $productCount = Product::count();



        return view('admin.dashboard', compact( 'consumablesCount',
            'equipmentCount',
            'categoryCount',
            'productCount'

        ));


        return view('test', compact(
            'consumablesCount',
            'equipmentCount',
            'categoryCount',
            'productCount'
        ));


    
        return view('statistics', compact(
            'consumablesCount',
            'equipmentCount',
            'categoryCount',
            'productCount'
        ));
    }

    // ... rest of your EquipmentController methods ...
}