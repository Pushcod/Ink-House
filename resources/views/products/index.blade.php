@extends('layout')

@section('main_content')
    <div class="">
        <h2>Все посты</h2>
        <div class="">
            @foreach ($products as $product)
                <h2 class="">{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>{{ number_format($product->price, 2) }} ₽</p>
                @if ($product->image)
                    <img src="{{ $product->image_url}}" alt="" class="w-full h-full">
                @endif
                <p>{{ $product->author->name ?? 'Не указан' }}</p>
                <p>{{ $product->country->name ?? 'Не указан' }}</p>
                <form action="{{ route('products.destroy', $product) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="" onclick="return confrim('Вы уверены?')">Удалить</button>
                </form>
                <a href="{{ route('products.edit', $product->id) }}">Редактировать пост</a>
            @endforeach
            <a href="{{ route('products.create') }}">Создать новый пост</a>
        </div>
    </div>
@endsection