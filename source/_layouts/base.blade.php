@extends('_layouts.plain')

@section('body')

  <header class="container">
    @include ('_partials.header')
  </header>

  <div class="main-section container">

    @yield('main')

  </div>

  <footer class="container">
    @include('_partials.footer')
  </footer>

@endsection
