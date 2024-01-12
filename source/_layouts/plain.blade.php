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

  <body class="bg-almost-white bg-pattern text-stone-900 font-sans antialiased">

    <div class="h-1 bg-gradient-to-r from-stone-400 from-10% via-stone-700 via-30% to-red-700 to-90%"></div>

    @yield('body')


    <div id="__debugbar"></div>

    <script defer src="/assets/debugbar/{{ $page->debugbarAssets['js'] }}"></script>

    <script type="text/javascript">
      window._debugbarConfigOptions = {mode: 'offline'}
    </script>

    <script type="module">
      import sheet from '/assets/debugbar/{{ $page->debugbarAssets['css'] }}' assert { type: 'css' };
      const debugbar = document.getElementById('__debugbar-shadow-root')
      debugbar.shadowRoot.adoptedStyleSheets = [sheet];
    </script>

  </body>
</html>
