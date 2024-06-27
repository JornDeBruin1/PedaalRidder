@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Checkout</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {!! session('message') !!}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('cart'))
        <table class="min-w-full bg-white border border-gray-300 mb-4">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Product</th>
                    <th class="py-2 px-4 border-b">Price</th>
                    <th class="py-2 px-4 border-b">Quantity</th>
                    <th class="py-2 px-4 border-b">Total</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach(session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity']; @endphp
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $details['name'] }}</td>
                        <td class="py-2 px-4 border-b">€{{ $details['price'] }}</td>
                        <td class="py-2 px-4 border-b">{{ $details['quantity'] }}</td>
                        <td class="py-2 px-4 border-b">€{{ $details['price'] * $details['quantity'] }}</td>
                        <td class="py-2 px-4 border-b">
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right mb-4">
            <strong>Total: €{{ $total }}</strong>
        </div>
    @else
        <p class="text-lg">Your cart is empty</p>
    @endif

    <form action="{{ route('checkout.store') }}" method="POST">
        @csrf
        <div>
            <label for="gender">Gender</label>
            <input type="text" id="gender" name="gender" required>
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="payment_method">Payment Method</label>
            <input type="text" id="payment_method" name="payment_method" required>
        </div>
        <button type="submit">Place Order</button>
    </form>
</div>
@endsection
