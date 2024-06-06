<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-2xl bg-white shadow-md rounded-lg p-6">
            <h2 class="text-3xl font-bold mb-6 text-center">Welcome, {{ Auth::user()->name }}!</h2>
            <p class="text-gray-700 text-center mb-6">You are logged in!</p>
            
            <div class="flex justify-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
