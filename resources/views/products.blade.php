@extends('layouts.app')

@section('content')
    <div class="w-full flex justify-center mb-16">
        <div class="w-full md:w-4/5 bg-[#F1F4F3] mx-auto">
            <!-- Fietsen -->
            <h1 class="text-2xl font-bold mb-4 mt-8">Fietsen</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                @foreach ($fietsen as $fiets)
                    <div class="bg-[#cdcdcd] flex flex-col items-center p-3 product-item cursor-pointer"
                        data-name="{{ $fiets->Naam }}" data-price="{{ $fiets->Prijs }}"
                        data-image="{{ Vite::asset($fiets->AfbeeldingPad) }}" data-description="{{ $fiets->Beschrijving }}" data-rijhoogte="{{ $fiets->RijHoogte }}">
                        <img src="{{ Vite::asset($fiets->AfbeeldingPad) }}" alt="{{ $fiets->Naam }}"
                            class="w-full h-64 object-contain">
                        <div class="w-full flex flex-col">
                            <h2 class="mt-2 text-xl font-semibold">{{ $fiets->Naam }}</h2>
                            <div class="w-full flex justify-between items-center mt-1">
                                <p class="text-lg font-bold text-[#ff4500]">€{{ $fiets->Prijs }}</p>
                                <a href="javascript:void(0)" class="ml-2 add-to-cart" data-name="{{ $fiets->Naam }}"
                                    data-price="{{ $fiets->Prijs }}" data-image="{{ Vite::asset($fiets->AfbeeldingPad) }}">
                                    <i class="fa-solid fa-handshake"></i>
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
<div id="productModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center" style="display: none;">
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
@endsection

@push('scripts')
    @vite('resources/js/modal.js')
@endpush
