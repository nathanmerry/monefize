@extends('layout')

@section('header')
  @include('modules.header')
@endsection

@section('body')
  <main class="flex-1">
    <div class="contact relative">
      <div class="contact-hero bg-img-bg absolute w-full -z-1">
        <div style="background-image: url({{ getimg('contact-background.png') }})" class="w-full h-full bg-cover opacity-20"></div>
      </div>
        <div class="container lg:pb-12 text-white">
            <div class="flex flex-wrap">
              <div class="w-full lg:w-5/12 lg:pr-4 font-header">
                <div class="contact-hero">
                  <div class="flex flex-col justify-center h-full">
                    <div class="text-lg lg:text-xl font-bold text-white text-opacity-50 mb-4 tracking-widest">CONTACT US</div>
                    <div class="text-5xl lg:text-7xl font-semibold">We’re Always <span class="under">Happy</span> To Talk.</div>
                  </div>
                </div>
              <div class="hidden lg:block py-16 font-body text-black">
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-16 h-15 mr-5 bg-primary rounded">
                    <img src="{{ getimg('pin.png') }}" alt="">
                  </div>
                  <div>
                    <div class="text-2xl font-bold">Visit Us</div>
                    <div class="text-xl">Floor 3, 235 High Holborn, London, WC1V 7LE</div>
                  </div>
                </div>
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-16 h-15 mr-5 bg-primary rounded">
                    <img src="{{ getimg('phone.png') }}" alt="">
                  </div>
                  <div>
                    <div class="text-2xl font-bold">Call Us</div>
                    <div class="text-xl">+44 203 4881 865</div>
                  </div>
                </div>
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-16 h-15 mr-5 bg-primary rounded">
                    <img src="{{ getimg('letter.png') }}" alt="">
                  </div>
                  <div>
                    <div class="text-2xl font-bold">Email Us</div>
                    <div class="text-xl">info@monefize.co.uk</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-7/12 pt-10 lg:pt-16 lg:pl-6">
              <div class="relative">
                @include('components.contactForm')
              </div>
              <div class="lg:hidden py-12 font-body text-black">
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-12 lg:w-16 h-12 lg:h-16 mr-5 p-3 lg:p-0 bg-primary rounded">
                    <img src="{{ getimg('pin.png') }}" alt="">
                  </div>
                  <div class="flex-1">
                    <div class="text-xl lg:text-2xl font-bold">Visit Us</div>
                    <div class="text-lg lg:text-xl">Floor 3, 235 High Holborn, London, WC1V 7LE</div>
                  </div>
                </div>
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-12 lg:w-16 h-12 lg:h-16 mr-5 p-3 lg:p-0 p-2 bg-primary rounded">
                    <img src="{{ getimg('phone.png') }}" alt="">
                  </div>
                  <div class="flex-1">
                    <div class="text-xl lg:text-2xl font-bold">Call Us</div>
                    <div class="text-lg lg:text-xl">+44 203 4881 865</div>
                  </div>
                </div>
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-12 lg:w-16 h-12 lg:h-16 mr-5 p-3 lg:p-0 bg-primary rounded">
                    <img src="{{ getimg('letter.png') }}" alt="">
                  </div>
                  <div class="flex-1">
                    <div class="text-xl lg:text-2xl font-bold">Email Us</div>
                    <div class="text-lg lg:text-xl">info@monefize.co.uk</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('footer')
    @include('modules.footer')
@endsection
