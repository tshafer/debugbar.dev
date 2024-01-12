@extends('_layouts.base')

@section('main')

  <div class="py-8 sm:py-16 lg:pb-40">
    <div class="w-full px-6 lg:px-8">
      <div class="w-full text-center">
        <h1 class="text-xl font-bold tracking-tight text-gray-900 sm:text-4xl">
          Powerful debugbar for Ruby on Rails
        </h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">
          Get a better understanding of your application performance and behavior with the debugbar.
        </p>
        <div class="mt-10 flex items-center justify-center gap-x-6">

          <button
{{--                  class="no-underline inline-flex items-center gap-x-1.5 rounded-md bg-stone-200 px-3.5 py-2.5 text-sm font-semibold text-stone-600 shadow-md hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-stone-600"--}}
                  onclick="document.querySelector('#__debugbar-shadow-root').shadowRoot.querySelector('#debubgbar-header > div:nth-child(1) > div > button:nth-child(4)').click()"
          >

            <span class="text">
              Try It Now
            </span>

            <span class="shimmer"></span>
          </button>

          <a href="/docs/how-it-works" class="text-sm font-semibold leading-6 text-gray-900">
            How It Works <span aria-hidden="true">→</span>
          </a>
        </div>
      </div>
      <div class="mt-16 flow-root sm:mt-24">
        <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
          <img src="https://tailwindui.com/img/component-images/project-app-screenshot.png" alt="App screenshot" width="2432" height="1442" class="rounded-md shadow-2xl ring-1 ring-gray-900/10">
        </div>
      </div>
    </div>
  </div>


@endsection
