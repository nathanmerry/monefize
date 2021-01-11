<footer class="py-9">
  <div class="container">
    <div class="flex flex-col lg:flex-row lg:items-center justify-between">
      <div class="flex flex-col lg:flex-row lg:items-center mb-3 lg:mb-0">
        <div class="flex h-5 lg:items-center lg:mr-6 mb-3 lg:mb-0">
          <svg class="h-full mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71 30" fill="none">
            <path fill="{{ $theme['color']['primary'] }}" d="M22.785 6.85975L7.86586 28.1707C6.41916 30.1829 3.79701 30.6402 1.8078 29.1768C-0.181419 27.8049 -0.633513 25.061 0.813189 23.0488L15.7323 1.82926C17.0886 -0.182931 19.8012 -0.640248 21.7904 0.823167C23.6892 2.19512 24.1413 4.93902 22.785 6.85975ZM37.1616 0.823167C35.1724 -0.548785 32.5502 -0.0914674 31.1035 1.82926L16.1844 23.1402C14.8281 25.1524 15.2802 27.8049 17.179 29.2683C19.1682 30.6402 21.7904 30.1829 23.2371 28.2622L38.1562 6.85975C39.6029 4.93902 39.0604 2.19512 37.1616 0.823167ZM69.4411 18.6585C70.7974 16.6463 70.3453 13.9939 68.4465 12.5305L55.5166 3.29268L52.1711 0.91463C50.0915 -0.548785 47.2885 -0.0914674 45.8418 2.01219L31.1035 23.1402C29.7472 25.1524 30.1993 27.8049 32.0981 29.2683C34.0874 30.6402 36.7095 30.1829 38.1562 28.2622L49.549 12.0732C50.0915 11.25 51.2669 11.0671 52.0807 11.6158L63.5639 19.8476C65.3723 21.128 68.0849 20.6707 69.4411 18.6585ZM49.6394 19.0244C48.2831 21.0366 48.7352 23.689 50.634 25.1524L52.8945 26.7988C54.8837 28.1707 57.5058 27.7134 58.9525 25.7927C60.3088 23.7805 59.8567 21.128 57.9579 19.6646L55.6975 18.0183C53.7083 16.5549 50.9957 17.0122 49.6394 19.0244Z" />
          </svg>
          <img src="{{ $theme['logo'] }}" class="max-h-full" alt="">
        </div>
        <div class="mb-3 lg:mb-0">{{ $theme['disclaimer'] }}</div>
      </div>
      <div class="flex flex-col lg:flex-row lg:items-center">
        <nav class="mr-4 mb-3 lg:mb-0">
          <ul class="flex flex-col lg:flex-row">
            @foreach($menu['footer'] as $item)
              <li class="text-lg lg:mx-5 mb-3 lg:mb-0 font-semibold">
                <a href="{{ $item['url'] }}" class="">{{ $item['title'] }}</a>
              </li>
            @endforeach
          </ul>
        </nav>
        <div class="flex flex-col lg:flex-row lg:items-center">
          @foreach($theme['social'] as $key => $social)
            <a href="{{ $social }}" class="flex items-center mb-3 lg:mb-0">
              <div class="flex items-center justify-center w-9 h-9 lg:mx-2 bg-blue-600 rounded-full">
                @include("svgs." . $key, ['class' => 'w-4 h-f', 'fill' => 'white'])
              </div>
              <div class="lg:hidden capitalize ml-2 font-semibold">{{ $key }}</div>
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</footer>
