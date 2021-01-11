<div 
  id="menu"
  class="menu absolute lg:relative top-0 left-0 z-10 w-full lg:w-auto overflow-hidden lg:h-full"
>
  <div class="h-24 bg-white lg:hidden"></div>
  <ul class="flex flex-col lg:flex-row lg:items-center w-full lg:w-auto bg-white lg:bg-transparent lg:mt-10 lg:mt-auto lg:h-full">
    @foreach($menu['primary'] as $item)
      <li class="flex flex-col mx-4 lg:mx-10 mb-3 lg:mb-0 text-lg">
        <a href="{{ $item['url'] }}" class="relative font-semibold {{ implode(' ', $item['classes']) }}">
          {{ $item['title'] }}
        </a>
      </li>
    @endforeach
  </ul>
</div>