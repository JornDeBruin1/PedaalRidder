@extends('layouts.app')

@section("content")
    <div class="w-full">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
    {{-- confirmation bericht --}}
    @if(\Session::has('bericht'))
        <div class="bg-green-600 rounded w-1/2 m-auto text-center border-black border">
        
            <p class="text-white text-lg m-2">{!! \Session::get('bericht') !!}</p>
        
        </div>
    @endif
    @if(\Session::has('error'))
        <div class="bg-red-600 rounded w-1/2 m-auto text-center border-black border"> 
            <p class="text-white text-lg m-2">{!! \Session::get('error') !!}</p>
        </div>
    @endif
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Reparatie</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 sm:text-xl">Als er iets kapot is aan uw fiets. Dan kan het formulier hier onder invullen!</p>
            <form action="/reparatie/save" class="space-y-8" method="post">
                @csrf
                <div>
                    <label for="voornaam" class="block mb-2 text-sm font-medium text-gray-900 ">Voornaam</label>
                    <input type="text" id="voornaam" name="voornaam" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Geef uw voornaam..." required >
                </div>
                <div>
                    <label for="achternaam" class="block mb-2 text-sm font-medium text-gray-900">Achternaam</label>
                    <input type="text" id="achternaam" name="achternaam" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 " placeholder="Geef uw achternaam..." required >
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="email" name="email" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 " placeholder="Geef uw email..." required>
                </div>
                <div class="sm:col-span-2">
                    <label for="bericht" class="block mb-2 text-sm font-medium text-gray-900" id="bericht">Uw kapotte fiets details</label>
                    <textarea id="bericht" name="bericht" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 " placeholder="Geef hier uw probleem..." required></textarea>
                </div>
                <button type="submit" class="bg-[#22333B] text-white rounded w-1/3 p-1.5">Stuur de reparatie door</button>
            </form>
        </div>
    </div>




@endsection