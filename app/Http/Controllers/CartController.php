<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        $id = count($cart) + 1;
        $cart[$id] = $request->only(['name', 'price', 'quantity', 'image']);
        session()->put('cart', $cart);

        return response()->json(['success' => true, 'message' => 'Item added to cart']);
    }

    public function remove(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            $request->session()->put('cart', $cart);
        }

        return redirect()->route('checkout.index')->with('message', 'Product removed from the cart.');
    }
}
