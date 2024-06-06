@extends('layout')

@section('content')
<div class="w-full">
    <div class= "bg-headerImgIndex">
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
        <div class="w-1/2">
            <h2 class="text-3xl">Lorem ipsum dolor sit amet.</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nesciunt perspiciatis doloremque nostrum, eveniet nobis. Sint exercitationem dolore in animi recusandae ad, culpa nobis, harum sit totam dignissimos corporis a porro officiis molestias magni atque architecto ea nisi? Impedit optio architecto veniam aperiam neque. Consequuntur minima sint laudantium error quod!</p>
    </div>
        <div class="w-1/2"><img src="{{Vite::asset('/resources/images/Text-media-static_background.png')}}" alt=""></div>
    </div>
</div>
@endsection