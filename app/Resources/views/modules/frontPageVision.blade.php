<section class="relative pt-20">
  <div class="relative z-30 max-w-container-sm mx-auto text-center px-2 lg:px-0">
    <div class="text-2xl mb-8 text-primary font-header font-bold">{{ $module['title_small'] }}</div>
    <h2 class="text-6xl text-dark w-full lg:w-8/12 mx-auto mb-10 font-bold">{{ $module['title_large'] }}</h2>
    <div class="pb-12 text-lg leading-relaxed">{!! $module['text'] !!}</div>
    @include('svgs.work-desk', ['class' => 'w-1/2 mx-auto z-10'])
  </div>
  <div class="absolute bottom-0 right-1/2 transform translate-x-1/2">
    @include('svgs.dots', ['class' => 'w-64'])
  </div>
</section>
