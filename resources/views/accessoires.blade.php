@extends('layouts.app')

@section('content')
<div class="w-full flex justify-center mb-16">
    <div class="w-full md:w-4/5 bg-[#F1F4F3] mx-auto">
        <!-- Helmen -->
        <h1 class="text-2xl font-bold mb-4">Helmen</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
            @foreach ($helmen as $helm)
                <div class="bg-[#cdcdcd] flex flex-col items-center p-3 product-item cursor-pointer" data-name="{{ $helm->naam }}" data-price="{{ $helm->prijs }}" data-image="{{ Vite::asset($helm->image_path) }}" data-description="{{ $helm->beschrijving }}">
                    <img src="{{ Vite::asset($helm->image_path) }}" alt="{{ $helm->naam }}" class="w-full h-64 object-contain">
                    <div class="w-full flex flex-col">
                        <h2 class="mt-2 text-xl font-semibold">{{ $helm->naam }}</h2>
                        <div class="w-full flex justify-between items-center mt-1">
                            <p class="text-lg font-bold text-[#ff4500]">€{{ $helm->prijs }}</p>
                            <a href="javascript:void(0)" class="ml-2 add-to-cart" data-name="{{ $helm->naam }}" data-price="{{ $helm->prijs }}" data-image="{{ Vite::asset($helm->image_path) }}">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bellen -->
        <h1 class="text-2xl font-bold mb-4">Bellen</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
            @foreach ($bellen as $bel)
                <div class="bg-[#cdcdcd] flex flex-col items-center p-3 product-item cursor-pointer" data-name="{{ $bel->naam }}" data-price="{{ $bel->prijs }}" data-image="{{ Vite::asset($bel->image_path) }}" data-description="{{ $bel->beschrijving }}">
                    <img src="{{ Vite::asset($bel->image_path) }}" alt="{{ $bel->naam }}" class="w-full h-64 object-contain">
                    <div class="w-full flex flex-col">
                        <h2 class="mt-2 text-xl font-semibold">{{ $bel->naam }}</h2>
                        <div class="w-full flex justify-between items-center mt-1">
                            <p class="text-lg font-bold text-[#ff4500]">€{{ $bel->prijs }}</p>
                            <a href="javascript:void(0)" class="ml-2 add-to-cart" data-name="{{ $bel->naam }}" data-price="{{ $bel->prijs }}" data-image="{{ Vite::asset($bel->image_path) }}">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Snelbinders -->
        <h1 class="text-2xl font-bold mb-4 mt-8">Snelbinders</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
            @foreach ($snelbinders as $snelbinder)
                <div class="bg-[#cdcdcd] flex flex-col items-center p-3 product-item cursor-pointer" data-name="{{ $snelbinder->naam }}" data-price="{{ $snelbinder->prijs }}" data-image="{{ Vite::asset($snelbinder->image_path) }}" data-description="{{ $snelbinder->beschrijving }}">
                    <img src="{{ Vite::asset($snelbinder->image_path) }}" alt="{{ $snelbinder->naam }}" class="w-full h-64 object-contain">
                    <div class="w-full flex flex-col">
                        <h2 class="mt-2 text-xl font-semibold">{{ $snelbinder->naam }}</h2>
                        <div class="w-full flex justify-between items-center mt-1">
                            <p class="text-lg font-bold text-[#ff4500]">€{{ $snelbinder->prijs }}</p>
                            <a href="javascript:void(0)" class="ml-2 add-to-cart" data-name="{{ $snelbinder->naam }}" data-price="{{ $snelbinder->prijs }}" data-image="{{ Vite::asset($snelbinder->image_path) }}">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Fietsverlichting -->
        <h1 class="text-2xl font-bold mb-4 mt-8">Verlichting</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
            @foreach ($verlichtingen as $licht)
                <div class="bg-[#cdcdcd] flex flex-col items-center p-3 product-item cursor-pointer" data-name="{{ $licht->naam }}" data-price="{{ $licht->prijs }}" data-image="{{ Vite::asset($licht->image_path) }}" data-description="{{ $licht->beschrijving }}">
                    <img src="{{ Vite::asset($licht->image_path) }}" alt="{{ $licht->naam }}" class="w-full h-64 object-contain">
                    <div class="w-full flex flex-col">
                        <h2 class="mt-2 text-xl font-semibold">{{ $licht->naam }}</h2>
                        <div class="w-full flex justify-between items-center mt-1">
                            <p class="text-lg font-bold text-[#ff4500]">€{{ $licht->prijs }}</p>
                            <a href="javascript:void(0)" class="ml-2 add-to-cart" data-name="{{ $licht->naam }}" data-price="{{ $licht->prijs }}" data-image="{{ Vite::asset($licht->image_path) }}">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('modal')
<div id="productModal" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white p-5 rounded-lg w-1/2 relative">
        <button id="closeModal" class="absolute top-0 right-0 m-3 text-gray-500 hover:text-gray-700">
            <i class="fas fa-times"></i>
        </button>
        <h2 id="modalTitle" class="text-2xl font-bold mb-4"></h2>
        <img id="modalImage" src="" alt="" class="w-full h-64 object-contain mb-4">
        <p id="modalDescription"></p>
        <p id="modalPrice" class="text-lg font-bold text-[#ff4500] mt-2"></p>
    </div>
</div>

<div id="cartModal" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white p-5 rounded-lg w-1/2 relative">
        <button id="closeCartModal" class="absolute top-0 right-0 m-3 text-gray-500 hover:text-gray-700">
            <i class="fas fa-times"></i>
        </button>
        <h2 id="cartModalTitle" class="text-2xl font-bold mb-4">Item added to cart</h2>
        <div id="cartModalBody"></div>
    </div>
</div>
@endsection

@push('scripts')
    @vite('resources/js/modal.js')
    @vite('resources/js/cart.js')
@endpush
