<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="75x75" href="{{ url('/assets/favicon.png') }}">
    <link rel="icon" href="{{ url('/assets/favicon.svg') }}">
    <link rel=”mask-icon” href={{ url('/assets/favicon.svg') }} color=”#f1f0ee">

    @include('_partials.seo')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
  </head>

  <body class="bg-almost-white bg-pattern text-stone-900 font-sans antialiased">

    <div class="h-2 bg-gradient-to-r from-transparent from-10% via-orange-200 via-30% to-amber-600 to-90%"></div>

    @yield('body')


    <div id="__debugbar"></div>

    <script defer src="/assets/debugbar/{{ $page->debugbarAssets['js'] }}"></script>

    <script type="text/javascript">
      window._debugbarConfigOptions = {mode: 'offline', height: 540}
    </script>

    @include('_partials.analytics')

  </body>
</html>
