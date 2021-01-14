<section class="bg-primary py-12 lg:py-24 text-white">
  <div class="container">
    <div class="mb-4 lg:mb-8 text-xl lg:text-2xl opacity-40 font-header font-bold">{{ $module['title_small'] }}</div>
    <div class="w-full lg:w-7/12 mb-4 lg:mb-8 text-4xl lg:text-7xl font-bold">{{ $module['title_large'] }}</div>
    <div class="w-full lg:w-7/12 pb-8 text-lg lg:text-xl">{!! $module['text'] !!}</div>
    <div class="grid lg:grid-cols-3 gap-10 lg:gap-5">
      @foreach ($module['values'] as $key => $value)
        <div class="lg:p-10 text-center rounded-lg">
          <img class="mx-auto mb-7" src="{{ $value['icon'] }}" alt="">
          <div class="mb-2 text-2xl font-bold">{{ $value['header'] }}</div>
          <div class="text-lg">{{ $value['text'] }}</div>
        </div>
      @endforeach
    </div>
  </div>
</section>