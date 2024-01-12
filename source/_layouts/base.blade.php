@extends('_layouts.plain')

@section('body')

  <div class="container mt-6 lg:mt-10 bg-white border p-2 lg:py-4 lg:px-8 rounded rounded-tr-xl shadow">

    <header class="mb-16">
      @include ('_partials.header')
    </header>

    <div class="main-section">

      @yield('main')

    </div>

  </div>

  <footer class="mb-24 py-2 container">
    @include('_partials.footer')
  </footer>

@endsection
