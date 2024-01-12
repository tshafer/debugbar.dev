<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ url('favicon.svg') }}">
    <link rel=”mask-icon” href={{ url('favicon.svg') }} color=”#dc2626">

    @include('_partials.seo')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
  </head>

  <body class="bg-almost-white bg-pattern border-t-4 border-rails-red text-stone-900 font-sans antialiased">

    @yield('body')

  </body>
</html>
