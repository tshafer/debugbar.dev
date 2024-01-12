@extends('_layouts.base')

@section('main')
  <div class="prose prose-stone no-max-w">
    <h1>Documentation</h1>
    <p>The debugbar is a gem you install in your Rails project. You can test it on this website, at the bottom of the page.</p>

    <div class="flex items-center space-x-6">
      @foreach([
        ['label' => 'Getting Started', 'url' => '/docs/installation'],
        ['label' => 'How It Works', 'url' => '/docs/how-it-works'],
        ] as $l)

        <a href="{{ $l['url'] }}" class="no-underline rounded-md bg-stone-100 px-2.5 py-1.5 text-sm font-semibold text-stone-600 shadow-md hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-stone-600">
          {{ $l['label'] }}
        </a>

      @endforeach
        <a target="_blank" href="https://github.com/julienbourdeau/debugbar" class="no-underline inline-flex items-center gap-x-1.5 rounded-md bg-stone-100 px-2.5 py-1.5 text-sm font-semibold text-stone-600 shadow-md hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-stone-600">
          Source Code
          <svg class="-ml-0.5 size-4" data-slot="icon" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M6.22 8.72a.75.75 0 0 0 1.06 1.06l5.22-5.22v1.69a.75.75 0 0 0 1.5 0v-3.5a.75.75 0 0 0-.75-.75h-3.5a.75.75 0 0 0 0 1.5h1.69L6.22 8.72Z"></path>
            <path d="M3.5 6.75c0-.69.56-1.25 1.25-1.25H7A.75.75 0 0 0 7 4H4.75A2.75 2.75 0 0 0 2 6.75v4.5A2.75 2.75 0 0 0 4.75 14h4.5A2.75 2.75 0 0 0 12 11.25V9a.75.75 0 0 0-1.5 0v2.25c0 .69-.56 1.25-1.25 1.25h-4.5c-.69 0-1.25-.56-1.25-1.25v-4.5Z"></path>
          </svg>
        </a>

    </div>

    <h2 class="mt-24">Table of content</h2>

    <div class="flex justify-between">

      @foreach($page->getDocsToc() as $name => $items)
        <div>

          <h3>{{ $name }}</h3>

          <ul>
            @foreach($items as $p)
              <li>
                @if($p['disabled'])
                  <span>{{ $p['title'] }}</span>
                @else
                  <a href="{{ $p['url'] }}" @if($page->activePage($p['url'])) class="font-semibold" @endif>{{ $p['title'] }}</a>
                @endif
              </li>
            @endforeach
          </ul>

        </div>
      @endforeach

    </div>
  </div>
@endsection
