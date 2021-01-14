<section class="border-t border-gray-200">
  <div class="container py-10 lg:py-20">
    <div class="text-xl mb-5 text-primary font-header font-bold uppercase">{{ $post['title'] }}</div>
    <div class="grid grid-cols-12 lg:gap-10">
      <div class="col-span-12 lg:col-span-6">
        <div class="text-5xl lg:text-7xl mb-5 font-header font-bold">{{ $module['title'] }}</div>
        <div class="lg:text-lg">{!! $module['text'] !!}</div>
      </div>
      <div class="col-span-12 lg:col-span-6 lg:p-5">
        <div class="relative w-full h-full">
          <div class="w-12/12 lg:w-8/12 lg:absolute z-20 top-0 left-0">
            <img class="rounded-lg shadow-xl" src="{{ $module['image_1'] }}" alt=""></div>
          <div class="hidden lg:block w-8/12 lg:absolute z-10 bottom-0 right-0">
              <img class="rounded-lg shadow-xl" src="{{ $module['image_2'] }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>