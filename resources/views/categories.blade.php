@extends('layouts.master')

@section('title', 'Все категории')

@section('content')
        @foreach($categories as $category)
          <div align="center">
              <a href="{{route('category', $category->code)}}">
                  <img src="http://internet-shop.tmweb.ru/storage/categories/mobile.jpg">
                  <h3>{{$category->name}} ({{$category->products->count()}})</h3>
              </a>
              <p>
                  {{$category->description}}
              </p>
          </div>
        @endforeach
@endsection
