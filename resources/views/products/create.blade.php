@extends('layout')

@section('main_content')
    
    <div class="">
        <h1>Создать новый продукт</h1>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="">
                <label for="name">Название продукта</label>
                <input type="text" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="">
                <label for="description">Описание продукта</label>
                <textarea name="description" id="" cols="30" rows="10" required>{{ old('description') }}</textarea>
            </div>

            <div class="">
                <label for="price">Цена продукта</label>
                <input type="number" name="price" value="{{ old('price') }}" required>
            </div>

            <div class="">
                <label for="image"></label>
                <input type="file" name="image" accept="image/*">
            </div>
            
            <div class="form-group">
                <label for="author_id">Автор *</label>
                <select name="author_id" id="author_id" required>
                    <option value="">-- Выберите автора --</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                            {{ $author->name }} 
                        </option>
                    @endforeach
                </select>
                
            </div>

            <div class="form-group">
                <label for="country_id">Страна *</label>
                <select name="country_id" id="country_id" required>
                    <option value="">-- Выберите автора --</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" 
                                {{ old('country_id') == $country->id ? 'selected' : '' }}>
                            {{ $country->name }} 
                        </option>
                    @endforeach
                </select>
                
            </div>

            <button type="submit">Загрузить</button>

        </form>
    </div>

@endsection