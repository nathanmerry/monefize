<section class="relative bg-primary">
  <div class="grid grid-cols-12">
    <div class="col-span-12 lg:col-span-8 text-white">
      <div class="absolute h-full w-full"></div>
      <div class="relative px-4 lg:px-20 pt-10 lg:pt-16">
        <div class="text-lg lg:text-2xl font-bold text-white text-opacity-50 mb-4 tracking-widest">CAREER</div>
        <div class="text-4xl lg:text-7xl font-header font-bold">{{ $module['title'] }}</div>
        <div class="text-xl">{!! $module['text'] !!}</div>
      </div>
    </div>
    <div class="col-span-12 lg:col-span-4">
      <img class="hidden lg:block w-full" src="{{ $module['background_image'] }}" alt="">
    </div>
  </div>
</section>