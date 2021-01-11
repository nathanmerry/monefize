<section x-data="brandsSlide({{ count($module['brands']) }})" class="relative py-16 lg:py-32 bg-gray-100">
  <div class="relative z-20 max-w-container-sm mx-auto px-2 lg:px-0">
    <div class="flex flex-col lg:flex-row">
      <div class="w-full lg:w-5/12 p-4 lg:p-8 bg-primary text-white rounded-lg">
        <div class="mb-3 lg:mb-5 text-5xl lg:text-7xl font-bold">{{ $module['main_title'] }}</div>
        <div class="mb-4 lg:mb-5 lg:text-lg">{{ $module['text'] }}</div>
        <div class="flex">
          <button x-on:click="slide(-1)" class="p-3 border-r-2 border-l border-t-2 border-b-2 border-white transform rotate-180">
            @include('svgs.cheveron-right', ['class' => 'w-4 lg:w-8 h-4 lg:h-8'])
          </button>
          <button x-on:click="slide(1)" class="p-3 border-r-2 border-l border-t-2 border-b-2 border-white">
            @include('svgs.cheveron-right', ['class' => 'w-4 lg:w-8 h-4 lg:h-8'])
          </button>
        </div>
      </div>
      <div class="w-full lg:w-7/12 flex items-center border-t border-b border-r border-gray-200 rounded-lg">
        @foreach($module['brands'] as $key => $brand)
          <div x-cloak x-show="index === {{$key}}" class="px-4 lg:px-16 my-4 lg:my-10">
            <img class="max-w-full mb-3 lg:mb-5" src="{{ $brand['brand_logo'] }}" alt="">
            <div class="lg:text-lg">{{ $brand['brand_description'] }}</div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="z-10 absolute top-16 left-24">
    @include('svgs.dots', ['class' => 'w-56'])
  </div>
</section>