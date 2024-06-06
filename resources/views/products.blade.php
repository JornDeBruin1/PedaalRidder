@extends('layouts.app')

@section('content')
<div class="productHeader bg-headerImgProducts bg-no-repeat ml-10">
    <div class="pt-[20%] pb-[24%] pl-10 pr-[20%]"><h1 class="font-bold headerText text-white">DE PEDAALRIDDER <div class="text-5xl grootText">This Is Two.</div>Introducing</h1></div>
</div>

<div class="fietsen ml-10 mt-12 flex">

    <div class="fiets 1 bg-[#cdcdcd] ml-40 w-1/3 rounded-lg">
        <div class="fietsImg1 bg-fiets1 bg-no-repeat"></div>
        <div class="fietsText1">
            <h1 class="text-2xl font-bold pt-5 ml-5">Electric Ace</h1>
            <p class="text-lg mt-1 ml-5">Rider height: 173-200cm</p>
            <img src="{{ Vite::asset('resources/images/fiets.png') }}" class="logo">
        </div>
    </div>

    <div class="fiets 2 bg-[#cdcdcd] ml-36 w-1/3 rounded-lg">
        <div class="fietsImg1 bg-fiets1 bg-no-repeat"></div>
        <div class="fietsText1">
            <h1 class="text-2xl font-bold pt-5 ml-5">Electric Ivy</h1>
            <p class="text-lg mt-1 ml-5">Rider height: 164-184cm</p>
            <img src="{{ Vite::asset('resources/images/dames-fiets.png') }}" class="logo">
        </div>
    </div>
</div>
@endsection