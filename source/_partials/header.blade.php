<div class="py-2 flex items-center justify-between">
{{--  LEFT--}}
  <div>
    <a href="/" class="">
      <img src="/assets/debugbar-logo.svg" class="h-7 fill-current text-current" alt="">
    </a>
  </div>

{{--  RIGHT--}}
  <div class="py-3 flex items-center space-x-8 font-semibold">
    @foreach($page->navigation as $nav)
      <a href="{{ $nav->url }}" class="inline-flex items-center gap-x-1.5 hover:text-red-700" @if($nav->external) target="_blank" @endif>
        {{ $nav->label }}

        @if($nav->external)
          <svg class="-ml-0.5 size-4" data-slot="icon" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M6.22 8.72a.75.75 0 0 0 1.06 1.06l5.22-5.22v1.69a.75.75 0 0 0 1.5 0v-3.5a.75.75 0 0 0-.75-.75h-3.5a.75.75 0 0 0 0 1.5h1.69L6.22 8.72Z"></path>
            <path d="M3.5 6.75c0-.69.56-1.25 1.25-1.25H7A.75.75 0 0 0 7 4H4.75A2.75 2.75 0 0 0 2 6.75v4.5A2.75 2.75 0 0 0 4.75 14h4.5A2.75 2.75 0 0 0 12 11.25V9a.75.75 0 0 0-1.5 0v2.25c0 .69-.56 1.25-1.25 1.25h-4.5c-.69 0-1.25-.56-1.25-1.25v-4.5Z"></path>
          </svg>
        @endif
      </a>
    @endforeach
  </div>
</div>
