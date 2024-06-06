@extends('layouts.app')

@section('content')
<div class="w-full">
    <div class="bg-aboutUsImage">
        <div class="pt-[20%] pb-[24%] pl-10">
            <h1 class="text-2xl text-white">Veloretti</h1>
            <h1 class="text-6xl pb-1 text-white">Over ons</h1>
            <h1 class="text-1xl text-white">Voor altijd vooruit</h1>
        </div>
    </div>
    <div class="w-full mt-[2%] mb-[2%] pl-[2%] flex">
        <div class="w-1/2">
            <img src="{{Vite::asset('/resources/images/image-5.png')}}" alt="">
        </div>
        <div class=" w-1/2">
            <h2 class="text-3xl pb-5 pt-[25%]">Voor altijd vooruit</h2>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non vestibulum sem. Integer non enim leo. Sed sed tincidunt elit. Sed feugiat consectetur tortor eget eleifend. Donec id sodales nisi. Proin vitae lorem in dolor mattis condimentum.</p>
        </div>

    </div>
    <div class="w-full mt-[2%] mb-[2%] pl-[2%] flex">
        <div class=" w-1/2 justify-items-center">
            <h2 class="text-3xl pb-5 pt-[25%]">Geboren en getogen in Zevenaar</h2>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non vestibulum sem. Integer non enim leo. Sed sed tincidunt elit. Sed feugiat consectetur tortor eget eleifend. Donec id sodales nisi. Proin vitae lorem in dolor mattis condimentum.</p>
        </div>
        <div class="w-1/2 flex ">
            <img src="{{Vite::asset('/resources/images/text-media-static_background.png')}}" alt="">
        </div>
    </div>
    <div class="h-[20%] pt-5 pb-5 w-full flex items-center justify-center">
        <div class="w-[50%]">
            <h1 class="text-8xl text-center flex items-center justify-center">
                Ontworpen door de beste ontwerpers,
                handgemaakt in Europa,
                rijplezier in elke stad
            </h1>
        </div>
    </div>


</div>
@endsection

