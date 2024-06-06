<!-- resources/views/auth/register.blade.php -->

@extends('layouts.app')

@section('content')
<div class="flex min-h-screen">
    <div class="w-full md:w-1/2 flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md p-8 space-y-4">
            <h2 class="text-2xl font-bold text-center">Sign up with your email and password.</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input id="name" type="text" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="name" autofocus>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="email">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="new-password">
                </div>
                <div class="mb-4">
                    <label for="password-confirm" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input id="password-confirm" type="password" name="password_confirmation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="new-password">
                </div>
                <div class="mt-6">
                    <button type="submit" class="w-full px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Sign up</button>
                </div>
                <div class="mt-4 text-center">
                    <span>Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Log in</a></span>
                </div>
            </form>
        </div>
    </div>
    <div class="hidden md:block md:w-1/2 bg-cover bg-center" style="background-image: url('{{ Vite::asset('resources/images/background_image.jpg') }}');"></div>
</div>
@endsection
