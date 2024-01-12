<div class="py-2 flex items-center justify-between">
{{--  LEFT--}}
  <div>
    <a href="/">
      <img src="/assets/debugbar-logo.svg" class="h-7 fill-current text-current" alt="">
    </a>
  </div>

{{--  RIGHT--}}
  <div class="py-3 flex items-center space-x-8 font-semibold">
    @foreach($page->navigation as $nav)
      <a href="{{ $nav->url }}" class="hover:text-rails-red">{{ $nav->label }}</a>
    @endforeach
  </div>
</div>
