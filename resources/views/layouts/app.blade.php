<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>De PedaalRidder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="{{ $bodyClass ?? '' }}">
    <div class="w-full bg-[#F1F4F3]">
        <nav class="relative px-4 py-4 flex justify-between items-center bg-white">
            <a class="text-3xl font-bold leading-none" href="/">
                <img class="w-[25%]" src="{{ Vite::asset('resources/images/PedaalRidder_logo.png') }}" alt="Logo">
            </a>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-blue-600 p-3">
                    <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>hamburger menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
                <li><a class="text-sm hover:text-blue-600" href="/">Home</a></li>
                <li><a class="text-sm hover:text-blue-600" href="/accessoires">Accessoires</a></li>
                <li><a class="text-sm hover:text-blue-600" href="/reparatie">Reparatie</a></li>
                <li><a class="text-sm hover:text-blue-600" href="/rent">Huren</a></li>
                <li><a class="text-sm hover:text-blue-600" href="/products">Kopen</a></li>
                <li><a class="text-sm hover:text-blue-600" href="/about-us">Over ons</a></li>
                <li class="text-gray-300"></li>
            </ul>
            <div class="w-1/3 flex justify-end">
                <div class="p-3">
                    @auth
                        <span>{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <i class="fa-regular fa-user"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}">
                            <i class="fa-regular fa-user"></i> Login
                        </a>
                    @endauth
                </div>
                <div class="p-3 pr-4">
                    <a href="javascript:void(0)">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div>
            @include('cart-sheet')
        </nav>
        <div class="navbar-menu relative z-50 hidden">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                <div class="flex items-center mb-8">
                    <a class="mr-auto text-3xl font-bold leading-none" href="/">
                        <img class="w-[25%]" src="{{ Vite::asset('resources/images/PedaalRidder_logo.png') }}" alt="Logo">
                    </a>
                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/">Home</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/accessoires">Accessoires</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/reparatie">Reparatie</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/rent">Huren</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/products">Kopen</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/about-us">Over ons</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        @yield('content')

        @yield('modal')

        <div class="w-full bg-[#22333B] pb-11 text-white flex">
            <div class="ml-[10%] text-lg w-1/3">
                <ul class="p-4 flex flex-col">
                    <li><a href="/">Home</a></li>
                    <li><a href="/accessoires">Accessoires</a></li>
                    <li><a href="/reparatie">Reparatie</a></li>
                    <li><a href="/rent">Huren</a></li>
                    <li><a href="/products">Kopen</a></li>
                    <li><a href="/about-us">Over ons</a></li>
                </ul>
            </div>
            <div class="w-2/3">
                <div class="ml-[30%]">
                    <h1 class="text-2xl font-bold pt-6">Meld je aan voor de nieuwsbrief</h1>
                    <form action="{{ route('newsbrief.store') }}" method="post">
                        @csrf
                        <div class="flex flex-col">
                            <label for="newsbrief">Geef je op voor onze nieuws brief!</label>
                            <input class="rounded-full w-2/3 mt-5 bg-transparent border border-white px-4 py-3 text-xs lg:placeholder:text-lg" type="email" name="newsbrief" placeholder="Geef uw mail adres..." id="newsbrief" required>
                            <button type="submit" class="bg-white text-black border border-white w-2/3 rounded-full px-4 py-2 mt-4">Meld aan!</button>
                            <div class="flex items-center mt-3">
                                <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="underline">terms and conditions</a>.</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
