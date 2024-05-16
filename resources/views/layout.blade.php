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
    <div class="w-full flex items-center justify-between">
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
</body>
</html>