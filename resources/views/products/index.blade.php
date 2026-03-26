@extends('layout')

@section('main_content')
    <div class="">
        <h2>Все посты</h2>
        <div class="">
            @forelse ($products as $product)
                <h2 class="">{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>{{ $product->price }}</p>
                <img src="{{ asset('storage/', $product->image) }}" alt="">
            @empty
                <a href="{{ route('products.create') }}">Создать новый пост</a>
            @endforelse
        </div>
    </div>
@endsection