@extends('layout')

@section('main_content')
    
    <div class="">
        <h1>Создать новый продукт</h1>

        <form action="" method="POST">
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
                <input type="file" name="image">
            </div>
            
            <button type="submit">Загрузить</button>

        </form>
    </div>

@endsection