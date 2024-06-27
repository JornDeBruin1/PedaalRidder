<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        return view('checkout', compact('cart'));
    }

    public function store(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->back()->withErrors(['message' => 'You must have at least one product in the cart to place an order.']);
        }

        $request->validate([
            'gender' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'payment_method' => 'required|string|max:50',
        ]);

        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }

        $order = Auth::user()->orders()->create([
            'items' => json_encode($cart),
            'gender' => $request->gender,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'payment_method' => $request->payment_method,
            'total_price' => $totalPrice,
        ]);

        $request->session()->forget('cart');

        $orderDetails = "Order placed successfully!\n\nYour order details:\n";
        foreach ($cart as $item) {
            $orderDetails .= $item['name'] . ', Price: €' . $item['price'] . ', Quantity: ' . $item['quantity'] . "\n";
        }
        $orderDetails .= "Total: €" . $totalPrice;

        return redirect()->route('checkout.index')->with('message', nl2br(e($orderDetails)));
    }
}
