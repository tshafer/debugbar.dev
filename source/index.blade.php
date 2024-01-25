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

            <span class="text inline-flex items-center gap-x-1.5">
              Try It Now

              <svg class="-ml-0.5 size-4" data-slot="icon" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M7.25 1.75a.75.75 0 0 1 1.5 0v1.5a.75.75 0 0 1-1.5 0v-1.5ZM11.536 2.904a.75.75 0 1 1 1.06 1.06l-1.06 1.061a.75.75 0 0 1-1.061-1.06l1.06-1.061ZM14.5 7.5a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 .75-.75ZM4.464 9.975a.75.75 0 0 1 1.061 1.06l-1.06 1.061a.75.75 0 1 1-1.061-1.06l1.06-1.061ZM4.5 7.5a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 .75-.75ZM5.525 3.964a.75.75 0 0 1-1.06 1.061l-1.061-1.06a.75.75 0 0 1 1.06-1.061l1.061 1.06ZM8.779 7.438a.75.75 0 0 0-1.368.366l-.396 5.283a.75.75 0 0 0 1.212.646l.602-.474.288 1.074a.75.75 0 1 0 1.449-.388l-.288-1.075.759.11a.75.75 0 0 0 .726-1.165L8.78 7.438Z"></path>
              </svg>
            </span>

{{--            <span class="shimmer"></span>--}}
          </button>

          <a href="/docs/introduction" class="text-sm font-semibold leading-6 text-gray-900">
            Learn more <span aria-hidden="true">→</span>
          </a>
        </div>
      </div>
      <div class="mt-16 flow-root sm:mt-24">
{{--        <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">--}}
          {!! $page->screenshot('home', "Screenshot of the Rails Debugbar") !!}
{{--        </div>--}}
      </div>
    </div>
  </div>


@endsection
