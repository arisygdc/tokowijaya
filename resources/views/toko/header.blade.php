<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800|Playfair+Display:400,900&display=swap" rel="stylesheet">

  <!-- Master Hover -->
  <link rel="stylesheet" href="{{ asset('css/hover.css') }}">

  <!-- Hefa Store Style -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>Toko Wijaya</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        Toko Wijaya
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/category') }}">KATEGORI</a>
          </li>
        </ul>
        @if (auth()->check())
        @if (auth()->user()->level == 'Pengguna')
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
        <a href="{{ url('/keranjang') }}">
          <img src="{{ asset('img/cart.png') }}" width="24" height="24" style="margin-left: 2rem;">
        </a>
        @endif
        <a href="{{url('/logout')}}">
        @else
        <a href="{{url('/login')}}">
        @endif
            <img height="24" src="https://img.icons8.com/ios-filled/50/FFFFFF/login-rounded-right.png"/>
        </a>
      </div>
    </div>
  </nav>
