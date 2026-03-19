@extends('layout')

@section('main_content')
    <section>
        @foreach ($banners as $banner)
        <div class="">
            <img src="" alt="">
        </div>
        <div class="">
            <h1 class="text-red-500">{{ $banner->name }}</h1>
            <p>{{ $banner->description }}</p>
            <a href="">
                Продукция
            </a>
        </div>
        @endforeach
        
    </section>
@endsection