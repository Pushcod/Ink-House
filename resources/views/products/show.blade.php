@extends('layout')

@section('main_content')
    <div class="">
        <h2>Все посты</h2>
        <div class="">
            <a href="{{ route('products.index') }}"></a>
        </div>
        <article class="">
           
                <h2 class="">{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>{{ number_format($product->price, 2) }} ₽</p>
                @if ($product->image)
                    <img src="{{ $product->image_url }}" alt="">
                @endif
                
                <p>{{ $product->author->name ?? 'Не указан' }}</p>
                <p>{{ $product->country->name ?? 'Не указан' }}</p>
                <div class="">
                    {!! $product->body !!}
                </div>
            
        </article>
    </div>
@endsection