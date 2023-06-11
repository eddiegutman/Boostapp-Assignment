<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller {
    public function store(Product $product) {
        $item = Cart::where('product_id', $product->id)->first();
        if (!$item) {
            $args = [
                'product_id' => $product->id,
                'quantity' => 1
            ];
            Cart::create($args);
        } else {
            $args = [
                'quantity' => $item->quantity + 1
            ];
            $item->update($args);
        }
        return back();
    }

    public function destroy(Cart $cart) {
        $cart->delete();
        return back();
    }
}
