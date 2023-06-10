<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index() {
        return view('index', [
            'products' => Product::all(),
            'cart' => Cart::all()
        ]);
    }

    public function favorites() {
        return view('index', [
            'products' => Product::favorites()->get(),
            'cart' => Cart::all()
        ]);
    }

    public function update(Request $request, Product $product) {
        $args = [
            'favorite' => $request->input('favorite') === "true" ? true : false
        ];
        $product->update($args);
        return back();
    }
}
