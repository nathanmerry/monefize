<section class="homePageHero pt-28 overflow-hidden">
  <div class="container">
    <div class="w-full lg:w-4/12">
      <h1 class="text-7xl font-bold mb-6 text-dark">{!! $module['title'] !!}</h1>
      <div class="mb-6 leading-relaxed text-dark">{{ $module['text'] }}</div>
      <div class="inline-block font-bold">
        <a 
          class="flex items-center px-4 py-2 text-primary border-2 border-primary rounded hover:bg-primary hover:text-white transition duration-100 ease-in-out" 
          href="{{ $module['call_to_action']['url'] }}"
        >
          <span class="mr-5">{{ $module['call_to_action']['title'] }}</span>
          @include('svgs.cheveron-right', ['class' => 'h-4'])
        </a>
      </div>
    </div>
    <div class="absolute top-0 right-0 w-5/12">
      <div class="flex justify-end relative w-full">
        <div class="background-hero"></div>
      </div>
    </div>
</section>

<style>
  .background-hero {
    display: inline-block;
    width: 100%;
    height: 800px;
    padding: 1rem;
    background-image: url({{ $module['background_image'] }});
    background-size: cover;
    background-position: top;
    background-repeat: no-repeat;
    -webkit-mask-image: url({{ $module['mask_image'] }});
    -webkit-mask-size: 100%;
    -webkit-mask-repeat: no-repeat;
    -webkit-position: center;
    mask-repeat: no-repeat;
    mask-position: center; 
    z-index: -1; 
    }
</style>


  