@extends('layouts.app')

@section('content')
    <div class="w-full">
        <div class="bg-aboutUsImage">
            <div class="pt-[20%] pb-[24%] pl-10">
                <h1 class="text-2xl text-white">De PedaalRidder</h1>
                <h1 class="text-6xl pb-1 text-white">Over ons</h1>
                <h1 class="text-1xl text-white">Voor altijd vooruit</h1>
            </div>
        </div>
        <div class="w-full flex flex-wrap">
            <div class="sm:w-1/2 w-full">
                <img src="{{Vite::asset('/resources/images/image-5.png')}}" alt="" class="w-full">
            </div>
            <div class="sm:w-1/2 w-full">
                <h2 class="text-3xl pb-5 pt-[25%]">Voor altijd vooruit</h2>
                <p class="text-lg">Bij Pedaalridder gaan we altijd vooruit. Onze passie voor fietsen brengt ons naar nieuwe hoogten, of je nu door de stad rijdt of de natuur verkent. Met een toegewijd team streven we naar de beste fietservaring. Jouw rit, onze passie - samen gaan we verder.</p>
            </div>
        </div>
        <div class="w-full flex flex-wrap">
            <div class="sm:w-1/2 w-full justify-items-center">
                <h2 class="text-3xl pb-5 pt-[25%]">Geboren en getogen in Zevenaar</h2>
                <p class="text-lg">Pedaalridder is diep geworteld in Zevenaar. Hier delen we onze liefde voor fietsen met onze gemeenschap. Onze lokale wortels inspireren ons om fietsen toegankelijk te maken voor iedereen. Bij Pedaalridder streven we naar het delen van onze passie voor fietsen, zowel lokaal als verder weg.</p>
            </div>
            <div class="sm:w-1/2 w-full flex">
                <img src="{{Vite::asset('/resources/images/text-media-static_background.png')}}" alt="" class="w-full">
            </div>
        </div>
        <div class="h-[20%] pt-5 pb-5 w-full flex items-center justify-center">
            <div class="w-[50%]">
                <h1 class="sm:text-4xl lg:text-8xl md:text-8xl text-center flex items-center justify-center">
                    Ontworpen door de beste ontwerpers,
                    handgemaakt in Europa,
                    rij plezier in elke stad
                </h1>
            </div>
        </div>
        <div class="bg-aboutUsImage2">
            <div class="pt-[20%] pb-[20%] pl-10">
                <h1 class="text-5xl sm:ml-[60%] ml-[0%] text-white">Gemaakt voor jou!</h1>
                <p class="text  sm:ml-[60%] ml-[0%] pb-1 text-white w-80">Bij Pedaalridder geloven we in fietsen op maat. Elk avontuur en elke fietser is uniek. We bieden fietsen die perfect bij jou passen, of je nu snelheid, comfort of avontuur zoekt. Ons assortiment staat voor kwaliteit en prestaties, zodat je vol vertrouwen kunt rijden, waar je avontuur je ook brengt.</p>
            </div>
        </div>
    </div>
@endsection
