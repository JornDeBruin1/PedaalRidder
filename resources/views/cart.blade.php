@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Shopping Cart</h1>

    @if(session('cart'))
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Product</th>
                    <th class="py-2 px-4 border-b">Price</th>
                    <th class="py-2 px-4 border-b">Quantity</th>
                    <th class="py-2 px-4 border-b">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $details)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $details['name'] }}</td>
                        <td class="py-2 px-4 border-b">€{{ $details['price'] }}</td>
                        <td class="py-2 px-4 border-b">{{ $details['quantity'] }}</td>
                        <td class="py-2 px-4 border-b">€{{ $details['price'] * $details['quantity'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-6">
            <a href="{{ route('checkout.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Proceed to Checkout</a>
        </div>
    @else
        <p class="text-lg">Your cart is empty</p>
    @endif
</div>
@endsection
