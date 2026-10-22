<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Craft;

class CraftController extends Controller
{
    // Halaman Beranda (Home)
    public function home()
    {
        return view('crafts.home');
    }

    // Halaman Katalog Daftar Produk (10 item per halaman)
    public function index()
    {
        $crafts = Craft::paginate(10);
        return view('crafts.index', compact('crafts'));
    }

    // Halaman Detail Produk
    public function show($id)
    {
        $craft = Craft::findOrFail($id);
        return view('crafts.show', compact('craft'));
    }
}