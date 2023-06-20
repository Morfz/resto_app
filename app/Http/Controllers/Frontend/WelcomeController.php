<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $specials = Category::where('name', 'Menu Spesial')->first();
        $randomMenu = null; // Inisialisasi variabel $randomMenu dengan nilai null

        if ($specials) {
            $randomMenu = $specials->menus()->inRandomOrder()->first();
            // Rest of your code
        } else {
            // Handle the case when the "Menu Spesial" category is not found
        }

        $categories = Category::whereNotIn('name', ['Menu Spesial'])
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('welcome', compact('specials', 'randomMenu', 'categories'));
    }
}
