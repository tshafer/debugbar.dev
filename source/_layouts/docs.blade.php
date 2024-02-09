@extends('_layouts.base')

@section('main')

  <div class="space-y-12 lg:flex lg:justify-between lg:space-y-0">
    <aside x-data="{ tocOpen: false }" id="docs-table-of-content" class="shadow-lg p-3 border lg:border-0 lg:min-w-64 lg:mr-20 lg:shadow-none">
      <h2 @click="tocOpen = true; console.log(tocOpen)" class="cursor-pointer lg:cursor-auto text-xl font-semibold leading-10">Table of contents</h2>

      <div x-show="tocOpen"  @click.away="tocOpen = false; console.log(tocOpen)" class="lg:hidden">
        @include('_partials.docs-toc')
      </div>

      <div class="hidden lg:block">
        @include('_partials.docs-toc')
      </div>

    </aside>

    <div class="w-full">
      <article>
        <header class="mb-12 space-y-1">
          <p class="font-display text-sm font-medium text-orange-600">{{ $page->toc_section }}</p>
          <h1 class="font-display text-4xl font-bold tracking-tight text-stone-900">{{ $page->title }}</h1>
          @if($page->subtitle)
            <h2 class="font-display text-lg tracking-tight text-stone-600">{{ $page->subtitle }}</h2>
          @endif
        </header>

        <div class="prose lg:prose-lg prose-stone max-w-none prose-headings:scroll-mt-28 prose-headings:font-display prose-headings:font-normal lg:prose-headings:scroll-mt-[8.5rem] prose-lead:text-stone-500  prose-a:font-semibold hover:prose-a:[--tw-prose-underline-size:6px] prose-pre:rounded-xl prose-pre:bg-stone-900 prose-pre:shadow-lg">

          @yield('content')

        </div>
      </article>
    </div>
  </div>

@endsection
