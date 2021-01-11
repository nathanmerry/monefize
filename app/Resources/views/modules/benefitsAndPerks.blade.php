<section class="pb-28">
  <div class="container pb-12 lg:pb-16">
    <hr>
  </div>
  <div class="container">
    <h2 class="mb-10 text-2xl text-primary font-extrabold font-header tracking-wider">{{ $module['title'] }}</h2>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-7">
      @foreach ($module['benefits_and_perks'] as $bap)
        <div class="grid grid-cols-12 gap-3 lg:block items-start">
          <div class="flex justify-center lg:justify-start items-baseline col-span-2 lg:mr-0 lg:mb-5">
            <img class="max-w-full max-h-full" src="{{ $bap['icon'] }}" alt="">
          </div>
          <div class="col-span-10 text-lg">{{ $bap['text'] }}</div>
        </div>
      @endforeach
    </div>
  </div>
</section>