<!-- resources/views/orders/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>My Orders</h1>
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <ul>
        @foreach($orders as $order)
            <li>
                Order #{{ $order->id }} - {{ $order->created_at->format('d M Y') }}
                <ul>
                    @foreach($order->items as $item)
                        <li>{{ $item['name'] }} - €{{ $item['price'] }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</div>
@endsection
