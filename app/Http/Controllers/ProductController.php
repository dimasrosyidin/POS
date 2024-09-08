<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan halaman daftar produk
    public function index()
    {
        return view('products.index');
    }

    // Menampilkan halaman kategori produk berdasarkan parameter kategori
    public function category($category)
    {
        return view('products.category', ['category' => $category]); 
    }
}