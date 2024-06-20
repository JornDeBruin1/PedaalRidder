@extends('layout')

@section('content')
<div class="w-full">
    <div class="bg-headerImgIndex bg-no-repeat">
        <div class="text-white pt-[20%] pb-[24%] pl-10">
            <h6>
                Welkom bij de pedaal ridder
            </h6>
            <h1 class="text-5xl">Welkom bij de pedaal ridder</h1>
        </div>
    </div>
    <div class="w-full mt-[2%] mb-[2%] pl-[2%] flex">
        <div class="w-1/2">
            <img src="{{Vite::asset('/resources/images/wrapper.png')}}" alt="man op fiets">
        </div>
        <div class="w-1/2"> 
            <h2 class="text-3xl pb-5 pt-[25%]">Huren</h2>
            <p class="text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab ea expedita earum ad optio necessitatibus quidem dolorum, et impedit laudantium laboriosam ducimus magnam atque doloribus sint commodi? Minima, officia repellendus.</p>
            <a href="/huren" class="text-blue-500">Lees meer</a>
        </div>
    </div>
    <div class="bg-contentImgIndex bg-no-repeat">
        <div class="pt-[20%] pb-[24%] w-[595px] text-white pl-[8%]">
            <h2 class="text-5xl w-3/4 pb-8">Service, onderhoud en verzekering</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi exercitationem, ipsam assumenda atque voluptatum velit necessitatibus facilis voluptatem impedit? Dicta!</p>
        </div>
    </div>
    <div class="bg-[#F1F4F3] w-full flex">
        <div class="w-1/3 ml-[10%] flex justify-center flex-col">
            <h2 class="text-4xl mb-5">Lorem ipsum dolor sit amet.</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nesciunt perspiciatis doloremque nostrum, eveniet nobis. Sint exercitationem dolore in animi recusandae ad, culpa nobis, harum sit totam dignissimos corporis a porro officiis molestias magni atque architecto ea nisi? Impedit optio architecto veniam aperiam neque. Consequuntur minima sint laudantium error quod!</p>
        </div>
        <div class="ml-[15%] w-1/2 mb-10"><img src="{{Vite::asset('/resources/images/Text-media-static_background.png')}}" alt=""></div>
    </div>
    <div class="w-full flex bg-white pb-10">
        <div class="w-1/2">
            <h2 class="text-3xl text-center mt-10">Lorem, ipsum dolor.</h2>
            <p class="text-center ml-[15%] mt-2 w-2/3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi distinctio similique quaerat velit rerum, quia deleniti? Omnis dignissimos sunt a?</p>
        </div>
        <div class="w-1/2 ml-[10%]">
            <img class="mt-10" src="{{Vite::asset('/resources/images/biking-away.png')}}" alt="">
        </div>
    </div>
    
  
    
    <div class="w-full bg-[#F1F4F3] mt-10">
        <div class="w-full flex flex-col">
            <h2 class="text-3xl text-center pb-10">
                Contact
            </h2>
            <div class="flex justify-center mb-10">
                <form action="">
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
                        <input class="w-full rounded px-4 py-2 bg-white border border-gray-300 focus:outline-none m-2" type="text" name="telefoonnummer"  placeholder="telefoonnummer">
                    </div>
                    <div>
                        <textarea class="w-full rounded px-4 py-2 bg-white border border-gray-300 focus:outline-none m-2" name="Bericht"  cols="30" rows="10" placeholder="Hoe kunnen we helpen"></textarea></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection