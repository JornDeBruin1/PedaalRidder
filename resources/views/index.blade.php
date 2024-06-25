@extends('layouts.app')

@section('content')
<div class="w-full">
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
    <div class="bg-headerImgIndex bg-no-repeat customMediaQuery1540:mx-[5%] customMediaQuery1720:mx-[15%]">
        <div class="text-white pt-[20%] pb-[24%] pl-10">
            <h6>
                Welkom bij de pedaal ridder
            </h6>
            <h1 class="text-5xl">Welkom bij de pedaal ridder</h1>
        </div>
    </div>
    <div class="w-full mt-[2%] mb-[2%] pl-[2%] flex CustomXsMediaQuery:flex-col CustomXsMediaQuery:items-center">
        <div class="w-1/2">
            <img src="{{Vite::asset('/resources/images/wrapper.png')}}" alt="man op fiets">
        </div>
        <div class="w-1/2"> 
            <h2 class="text-3xl pb-5 pt-[10%]">Huren</h2>
            <p class="text-lg md:w-[50%]">Op zoek naar een fiets om de stad of natuur te verkennen? Bij De Pedaalridder bieden we een breed assortiment aan hoogwaardige fietsen voor elke behoefte. Of je nu een stadsfiets, racefiets, mountainbike of e-bike zoekt, wij hebben het voor je klaarstaan. Geniet van flexibele huurperiodes, van een dag tot een maand, en profiteer van onze uitstekende service en goed onderhouden fietsen. Boek nu online en trap je avontuur tegemoet met De Pedaalridder!</p>
            <a href="/rent" class="text-blue-500">Lees meer</a>
        </div>
    </div>
    <div class="bg-contentImgIndex bg-no-repeat customMediaQuery1540:mx-[5%] customMediaQuery1720:mx-[15%]">
        <div class="pt-[20%] pb-[24%] CustomXsMediaQuery:w-full md:w-[30%] text-white pl-[8%]">
            <h2 class="text-5xl w-3/4 pb-8">Service, onderhoud en verzekering</h2>
            <p>Bij de PedaalRidder bieden we uitgebreide fietsservices, van onderhoud en reparaties tot verzekeringen. Onze deskundige monteurs zorgen dat uw fiets altijd in topconditie is. Kies uit verschillende onderhoudspakketten en verzekeringsopties, zodat u zorgeloos kunt fietsen. Bezoek ons voor een betrouwbare en veilige fietservaring.</p>
        </div>
    </div>
    <div class="bg-[#F1F4F3] w-full flex">
        <div class="w-1/3 ml-[10%] flex justify-center flex-col">
            <h2 class="text-4xl mb-5">Ontdek onze Stadfietsen</h2>
            <p>Bij De Pedaalridder bieden we een uitgebreide collectie stadsfietsen, perfect voor dagelijks gebruik. Onze fietsen zijn ontworpen voor comfort, duurzaamheid en stijl. Of je nu naar je werk fietst, boodschappen doet of een ontspannen rit door de stad maakt, onze stadsfietsen zorgen voor een soepele en betrouwbare rit.</p>
            <br>
            <ul class="list-disc CustomXsMediaQuery:hidden md:block">
                <li><strong>Comfortabel Design: </strong>Ergonomisch ontworpen voor een prettige rijervaring.</li>
                <li><strong>Duurzame Kwaliteit: </strong>Gemaakt van hoogwaardige materialen voor langdurig gebruik.</li>
                <li><strong>Stijlvol en Functioneel: </strong>Moderne ontwerpen die praktisch en aantrekkelijk zijn</li>
            </ul>
            <br>
            <p>Kom langs en ervaar het verschil zelf bij De Pedaalridder – jouw specialist in stadsfietsen!</p>
        </div>
        <div class="ml-[15%] w-1/2 mb-10"><img src="{{Vite::asset('/resources/images/Text-media-static_background.png')}}" alt=""></div>
    </div>
    <div class="w-full flex bg-white pb-10">
        <div class="w-1/3 ml-[10%]">
            <h2 class="text-3xl text-center mt-10">Ontdek onze E-bikes</h2>
            <p class="mt-2">Bij De Pedaalridder bieden we een gevarieerd assortiment elektrische fietsen die perfect zijn voor moeiteloos en duurzaam vervoer. Onze e-bikes combineren stijl, comfort en innovatieve technologie om je fietservaring te verbeteren.</p>
            <br>
            <ul class="list-disc CustomXsMediaQuery:hidden md:block">
                <li><strong>Krachtige Motoren: </strong>Geniet van extra ondersteuning bij elke trap.</li>
                <li><strong>Lange Actieradius: </strong>Ideaal voor zowel korte ritten als lange tochten.</li>
                <li><strong>Comfort en Stijl: </strong>Moderne ontwerpen met comfortabele zittingen en ergonomische handgrepen.</li>
                <li><strong>Betrouwbaarheid: </strong>Gemaakt van hoogwaardige materialen en voorzien van de nieuwste technologieën</li>
            </ul>
            <br>
            <p>Ervaar de vrijheid van elektrisch fietsen met De Pedaalridder – jouw partner voor moderne mobiliteit!</p>
        </div>
        <div class="w-1/2 ml-[15%]">
            <img class="mt-10" src="{{Vite::asset('/resources/images/biking-away.png')}}" alt="">
        </div>
    </div>
    
  
    
    <div class="w-full bg-[#F1F4F3] mt-10">
        <div class="w-full flex flex-col">
            <h2 class="text-3xl text-center pb-10">
                Contact
            </h2>

            <div class="flex justify-center mb-10">
                <form action="/contact/save" method="post">
                    @csrf
                    <div>
                        <input class="w-full rounded px-4 py-2 bg-white border border-gray-300 focus:outline-none m-2" type="text" name="Voornaam" placeholder="Voornaam">
                    </div>
                    <div>
                        <input class="w-full rounded px-4 py-2 bg-white border border-gray-300 focus:outline-none m-2" type="text" name="Achternaam" placeholder="Achternaam">
                    </div>
                    <div> 
                        <input class="w-full rounded px-4 py-2 bg-white border border-gray-300 focus:outline-none m-2" type="email" name="Email"  placeholder="Email">
                    </div>
                    <div>
                        <input class="w-full rounded px-4 py-2 bg-white border border-gray-300 focus:outline-none m-2" type="text" name="Telefoonnummer"  placeholder="telefoonnummer">
                    </div>
                    <div>
                        <textarea class="w-full rounded px-4 py-2 bg-white border border-gray-300 focus:outline-none m-2" name="Bericht"  cols="30" rows="10" placeholder="Hoe kunnen we helpen"></textarea></div>
                        <button type="submit" class="bg-[#22333B] text-white rounded w-1/3 p-1.5">verzend</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection