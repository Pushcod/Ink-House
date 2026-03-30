@extends('layout')

@section('main_content')
    <section class="flex items-center justify-between w-full">
        @foreach ($banners as $banner)
        <div class="w-full ">
            <img src="{{ asset('storage/' . $banner->image) }}" alt="">
        </div>
        <div class="w-full flex flex-col gap-[30px]">
            <h1 class="font-medium text-[60px] leading-[50px]">{{ $banner->name }}<span class="text-[#598D66]"> Ink. House</span></h1>
            <p class="font-medium text-[18px] text-[#86928B]">{{ $banner->description }}</p>
            <a class="w-[257px] h-[65px] text-center p-[20px] border-[#598D66] border-[1px] text-[#598D66] text-[20px]" href="">
                Продукция
            </a>
        </div>
        @endforeach
        
    </section>
    <section></section>
    <section>
        @foreach ($collections as $collection)
        <div class="bg-gradient-to-r from-black to-white p-[70px]">
            <img src="{{ asset('storage/' . $collection->image) }}" alt="">
            <div class="flex flex-col gap-[30px] text-white">
                <h1 class="font-medium text-[40px] leading-3">{{ $collection->name }}</h1>
                <p class="text-[18px] w-[540px]">{{ $collection->description }}</p>
                <a class="w-[257px] h-[65px] text-center p-[20px] bg-[#EEDB6D] text-black" href="">
                    Ознакомиться
                </a>
            </div>
        </div>
        @endforeach
        
    </section>
    <section>
        @foreach ($teams as $team)
        <div class="flex items-center justify-between">
            <img src="{{ asset('storage/', $team->image) }}" alt="">
        
        <div class="">
            <h1 class="font-medium text-[40px]">{{ $team->name }}</h1>
            <p class="text-[18px] w-[635px]">{{ $team->description }}</p>
            <ul>
                <li class="rounded-full">
                    <a class="w-full h-full" href="">
                        <img class="w-[80px] h-[80px]" src="" alt="">
                    </a>
                </li>
            </ul>
        </div>
        </div>
        @endforeach
        
    </section>
@endsection