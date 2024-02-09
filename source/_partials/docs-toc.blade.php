<nav class="mt-6">
  @foreach($page->getDocsToc() as $name => $items)
    <h3 class="font-display text-sm font-semibold leading-6">{{ $name }}</h3>

    <ul role="list" class="mt-2 mb-3 space-y-2 border-l-2 border-stone-100 lg:mt-4 lg:mb-6 lg:space-y-4 lg:border-stone-200">
      @foreach($items as $p)

        <li class="relative">
          @if($p['disabled'])
            <span class="cursor-not-allowed block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-stone-700 before:bg-stone-300 hover:before:block before:hidden">
                    {{ $p['title'] }}
                  </span>
          @else
            <a href="{{ $p['url'] }}" class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-stone-700 before:bg-stone-300 hover:text-stone-800 hover:before:block @if($page->activePage($p['url'])) font-semibold before:block @else before:hidden @endif">
              {{ $p['title'] }}
            </a>
          @endif
        </li>

      @endforeach
    </ul>
  @endforeach
</nav>
