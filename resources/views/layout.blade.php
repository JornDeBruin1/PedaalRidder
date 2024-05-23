<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta description="">

        <title>De PedaalRidder</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
    <div class="w-full bg-[#F1F4F3]">
        <div class="w-full flex items-center justify-between sticky">
            <div class="w-1/3 pl-4 pt-1 pb-1">
                <a href="/">
                    <img class="w-[18%]" src="{{ Vite::asset('resources/images/PedaalRidder_logo.png') }}" alt="">
                </a>
            </div>
            <div class="w-1/3">
                <ul class="flex justify-between">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="">Accessoires</a></li>
                    <li><a href="">Reparatie</a></li>
                    <li><a href="">Huren</a></li>
                    <li><a href="">Kopen</a></li>
                    <li><a href="">Over ons</a></li>
                </ul>
            </div>
            <div class="w-1/3 flex justify-end">
                <div class="p-3">
                    <a href="">
                        <i class="fa-regular fa-user"></i>
                    </a>
                </div>  
                <div class="p-3 pr-4">
                    <a href="">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    
                </div>
            </div>
        </div>

        @yield('content')

        <div class="w-full bg-[#22333B] pb-11 text-white flex">
            <div class="ml-[10%] text-lg w-1/3">
                <ul class="p-4 flex flex-col">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Accessoires</a></li>
                    <li><a href="#">Reparatie</a></li>
                    <li><a href="#">Huren</a></li>
                    <li><a href="#">Kopen</a></li>
                    <li><a href="#">Over ons</a></li>
                </ul>
            </div>
            <div class="w-2/3">
                <div class="ml-[30%]">
                    <h1 class="text-2xl font-bold pt-6">Meld je aan voor de nieuwsbrief</h1>
                    <form action="" method="post">
                        @csrf
                        <div class="flex flex-col">
                            <label for="">Geef je op voor onze nieuws brief!</label>
                            <input class="rounded-full w-2/3 mt-5 bg-transparent border border-white px-4 py-3 text-xs lg:placeholder:text-lg" type="text" name="" placeholder="Geef uw mail adres..." id="brief">
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