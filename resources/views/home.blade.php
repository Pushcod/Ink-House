@extends('layout')

@props(['banners'])

@section('main_content')
    <section>
        <div class="">
            <img src="{{ url('storage', $banners->images[0]) }}" alt="">
        </div>
        <div class="">
            <h1>{{ $banners->name }}</h1>
            <p>{{ $banners->description }}</p>
            <a href="">
                Продукция
            </a>
        </div>
    </section>
@endsection