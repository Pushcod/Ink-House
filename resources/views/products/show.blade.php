@extends('layout')

@section('main_content')
    <div class="">
        <h2>Все посты</h2>
        <div class="">
           
                <h2 class="">{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>{{ number_format($product->price, 2) }} ₽</p>
                <img src="{{ asset('storage/', $product->image) }}" alt="">
                <p>{{ $product->author->name ?? 'Не указан' }}</p>
                <p>{{ $product->country->name ?? 'Не указан' }}</p>
                <form action="{{ route('products.destroy', $product) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="" onclick="return confrim('Вы уверены?')">Удалить</button>
                </form>
            
        </div>
    </div>
@endsection