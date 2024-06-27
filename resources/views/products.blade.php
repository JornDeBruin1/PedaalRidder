@extends('layouts.app')

@section('content')
<div class="productHeader bg-headerImgProducts bg-no-repeat">
    <div class="pt-[20%] pb-[24%] pl-10 pr-[20%]">
        <h1 class="font-bold headerText text-white">
            DE PEDAALRIDDER
            <div class="text-5xl grootText">This Is Two.</div>
            Introducing
        </h1>
    </div>
</div>

<form class="max-w-sm mx-auto mt-8">
    <label for="Soort" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kies een Soort</label>
    <select id="Soort" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected value="alle">Alle</option>
        <option value="man">Man</option>
        <option value="vrouw">Vrouw</option>
        <option value="kind">Kind</option>
    </select>
</form>

<div class="fietsen ml-10 mt-12 flex flex-wrap justify-center">
    @if (count($fietsen) > 0)
        @foreach($fietsen as $fiets)
            <div class="fietsPage w-1/2 md:w-1/4 product-item cursor-pointer {{ strtolower($fiets->Type) }} flex flex-col items-center p-3" data-name="{{ $fiets->Naam }}" data-price="{{ $fiets->Prijs }}" data-image="{{ Vite::asset($fiets->AfbeeldingPad) }}" data-description="{{ $fiets->Beschrijving }}" data-rijhoogte="{{ $fiets->RijHoogte }}">
                <div class="fiets bg-[#cdcdcd] pb-5 rounded-lg flex flex-col items-center">
                    <div class="fietsImg1 bg-fiets1 bg-no-repeat"></div>
                    <div class="fietsText1 text-center">
                        <h1 class="text-2xl font-bold pt-5">{{ $fiets->Naam }}</h1>
                        <img src="{{ Vite::asset($fiets->AfbeeldingPad) }}" alt="Fiets">
                        <p class="text-lg mt-1 font-bold text-[#ff4500]">€{{ $fiets->Prijs }}</p>
                        <a href="javascript:void(0)" class="mt-2 add-to-cart" data-name="{{ $fiets->Naam }}" data-price="{{ $fiets->Prijs }}" data-image="{{ Vite::asset($fiets->AfbeeldingPad) }}">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <h1 class="ml-10">Geen Fietsen Gevonden</h1>
    @endif
</div>

<div class="LeaseStuk flex mt-12 mb-12 justify-center">
    <img src="{{ Vite::asset('resources/images/Text-media-static_background.png') }}" class="w-2/5" alt="Lease Background">
    <div class="w-2/5 ml-10">
        <h1 class="text-2xl font-bold pt-5">Lease een fiets</h1>
        <p class="text-lg mt-1">Lease een fiets voor een vast bedrag per maand. Zo heb je altijd een fiets en hoef je niet in een keer een groot bedrag te betalen.</p>
    </div>
</div>

<div class="review mb-6">
    <h1 class="text-4xl font-bold mb-8 pt-5 text-center">They talked about our store</h1>
    <div class="reviews flex justify-evenly"> 
        <div class="review1 flex max-w-56">
            <p>"Erg erg goede winkel bbabababababababababab"</p>
        </div>
        <div class="review2 flex max-w-56">
            <p>"Ik ben erg tevreden over de service, Ze hielpen me met baren"</p>
        </div>
        <div class="review3 flex max-w-56">
            <p>"Ik ben erg tevreden over de service ~John mario"</p>
        </div>
    </div>
</div>

<div class="w-full mt-[2%] mb-[2%] pl-[2%] flex justify-center">
    <div class="w-1/2">
        <h2 class="text-3xl pb-5 pt-[25%] text-center">Geboren en getogen in Zevenaar</h2>
        <p class="text-lg text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non vestibulum sem. Integer non enim leo. Sed sed tincidunt elit. Sed feugiat consectetur tortor eget eleifend. Donec id sodales nisi. Proin vitae lorem in dolor mattis condimentum.</p>
    </div>
    <div class="w-1/2 flex justify-center">
        <img src="{{ Vite::asset('/resources/images/wrapper.png') }}" alt="Wrapper">
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
        <p id="modalRijHoogte"></p>
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
    @vite('resources/js/products.js')
@endpush
