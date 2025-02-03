<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', true)->get();
        return view('page.Product', [
            'titlePage' => 'Продукция',
            'products' => $products,
        ]);
    }
}
