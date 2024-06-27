<!-- resources/views/reviews/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reviews</h1>
    <ul>
        @foreach($reviews as $review)
            <li>
                {{ $review->name }} - {{ $review->stars }} stars
                <p>{{ $review->message }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection
