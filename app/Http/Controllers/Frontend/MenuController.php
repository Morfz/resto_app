<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class MenuController extends Controller
{
    public function index()
    {
        $makananPembuka = Category::where('name', 'Makanan Pembuka')->first();
        $makananPenutup = Category::where('name', 'Makanan Penutup')->first();
        $makananUtama = Category::where('name', 'Makanan Utama')->first();
        $minumanDingin = Category::where('name', 'Minuman Dingin')->first();
        $minumanHangat = Category::where('name', 'Minuman Hangat')->first();

        return view('menus.index', compact('makananPembuka', 'makananPenutup', 'makananUtama', 'minumanDingin', 'minumanHangat'));
    }
}
