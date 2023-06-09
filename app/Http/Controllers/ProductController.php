<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            'products' => Product::all()
        ]);
    }

    public function favorites()
    {
        return view('favorites', [
            'favorites' => Product::favorites()->get()
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $formFields = [
            'favorite' => $request->input('favorite') === "on" ? true : false
        ];
        $product->update($formFields);
        return back();
    }
}
