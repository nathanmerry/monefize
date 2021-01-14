<section class="py-12 lg:py-24">
  <div class="container">
    <div class="grid grid-cols-12 mb-10">
      <div class="col-span-12 lg:col-span-3 text-4xl lg:text-7xl text-primary font-bold">{{ $module['title'] }}</div>
      <div class="col-span-12 lg:col-span-9 lg:pl-24 text-lg lg:text-2xl -my-3 text-dark">{!! $module['text'] !!}</div>
    </div>
    <div class="">
      @foreach ($module['investors'] as $investor)
        <div class="grid grid-cols-12 lg:gap-12 mb-8 py-2 lg:py-5 px-4 lg:px-5 border border-gray-300 rounded-xl">
          <div class="col-span-12 lg:col-span-9 my-4 lg:my-7 lg:ml-6">
            <div class="text-4xl font-bold mb-4">{{ $investor['investor_name'] }}</div>
            <div class="text-lg">{{ $investor['investor_description'] }}</div>
          </div>
          <div class="col-span-12 lg:col-span-3 flex items-center justify-center h-28 lg:h-auto bg-gray-100 rounded-lg">
            <img class="m-auto" src="{{ $investor['investor_logo'] }}" alt="">
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>