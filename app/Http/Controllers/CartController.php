<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller {
    public function store(Product $product) {
        $args = [
            'product_id' => $product->id
        ];
        Cart::create($args);
        return back();
    }

    public function destroy(Cart $cart) {
        $cart->delete();
        return back();
    }
}
