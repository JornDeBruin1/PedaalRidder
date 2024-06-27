<!-- resources/views/admin/reviews.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Reviews</h1>
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <ul>
        @foreach($reviews as $review)
            <li>
                {{ $review->name }} - {{ $review->stars }} stars
                <p>{{ $review->message }}</p>
                <form action="{{ route('reviews.approve', $review) }}" method="POST">
                    @csrf
                    <button type="submit">Approve</button>
                </form>
                <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
