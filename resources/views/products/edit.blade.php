@extends('layout')

@section('main_content')
    
    <h2>Редактирование поста</h2>

    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="">
            <label for="name">Название продукта</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="">
            <label for="description">Описание продукта</label>
            <textarea name="description" id="" cols="30" rows="10" required>{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="">
            <label for="price">Цена продукта</label>
            <input type="number" name="price" value="{{ old('price', $product->price) }}">
        </div>

        <div class="">
            <label for="image">Картинка продукта</label>
            <input type="file" name="image" accept="image/*">
        </div>

        @if (isset($product) && $product->image)
            <p>Текущее изображения</p>
            <img src="{{ $product->image_url }}" alt="">
        @endif

        <div class="">
            <label for="author_id">Авторы</label>
            <select name="author_id" id="author_id" required>
                <option value="">--Выбрать автора--</option>
                @foreach($authors as $author)
                        <option value="{{ old('id',$author->id) }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                            {{ old('name',$author->name) }} 
                        </option>
                @endforeach
            </select>
        </div>

        <div class="">
            <label for="country_id">Страна</label>
            <select name="country_id" id="country_id" required>
                <option value="">--Выбрать страну--</option>
                @foreach($countries as $country)
                        <option value="{{ old('id',$country->id) }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>
                            {{ old('name',$country->name) }} 
                        </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Загрузить</button>
    </form>

@endsection