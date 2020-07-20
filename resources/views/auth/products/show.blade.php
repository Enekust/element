@extends('auth.layouts.master')

@section('title', 'Продукт ' . $product->name)

@section('content')
    <div class="col-md-12">
        <h1>{{ $product->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Атрибуты смартфонов</td>
                <td>{{ $product->id_phone_attributes }}</td>
            </tr>
            <tr>
                <td>Атрибуты ноутбуков</td>
                <td>{{ $product->id_laptop_attributes }}</td>
            </tr>
            <tr>
                <td>Атрибуты телевизоров</td>
                <td>{{ $product->id_tv_attributes }}</td>
            </tr>
            <tr>
                <td>Атрибуты планшетов</td>
                <td>{{ $product->id_tablets_attributes }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>Категория</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            <tr>
                <td>Стоимость</td>
                <td>{{ $product->price }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
