<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" type="text/css">



</head>
<body>
<div class="container">
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
      <a class="p-2 text-dark" href="{{route('index')}}">Element</a>
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="{{route('index')}}">Все товары</a>
      <a class="p-2 text-dark" href="{{route('categories')}}">Категории</a>
      <a class="p-2 text-dark" href="{{route('basket')}}">В корзину</a>
        @guest
            <a class="btn btn-outline-primary" href="{{ route('login') }}">Войти</a>
        @endguest

        @auth
            <a class="btn btn-outline-primary" href="{{ route('home') }}">Панель администратора</a>
            <a class="btn btn-outline-primary" href="{{ route('get-logout') }}">Выйти</a>
        @endauth
    </nav>
  </div>
</div>


<div class="container">
  <div class="starter-template">
    @if(session()->has('success'))
      <p class="alert alert-success align-items-center">{{session()->get('success')}}</p>
    @endif
    @if(session()->has('warning'))
      <p class="alert alert-warning align-items-center">{{session()->get('warning')}}</p>
    @endif
    @yield('content')
  </div >
</div>
</body>
</html>
