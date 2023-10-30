@extends('layouts.master')
@section('title')
{{ Str::upper($brand->name) }}
@endsection
@section('styles')
<style>
.product-background {background-color: lightgrey;}
</style>
@endsection
@section('content')
<section class="py-36 h-auto relative flex items-center background-effect overflow-hidden bg-no-repeat bg-center bg-cover" style="background-image: url('{{ Storage::url($brand->slider_image) }}') !important;">
  <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/80 to-black"></div>
  <div class="container relative">
      <div class="grid grid-cols-1 pb-8 text-center mt-10">
          <h3 class="mb-3 text-3xl leading-normal font-medium text-white">{{ Str::upper($brand->name) }}</h3>

          <p class="text-slate-300 text-lg max-w-xl mx-auto">{{ $brand->{'intro_'.app()->getLocale()} }}</p>
      </div>
  </div>
  <div class="absolute inset-0 bg-indigo-600/5"></div>
  <ul class="circles absolute inset-0 h-full w-full overflow-hidden p-0 mb-0 disable-select">
      <li class="brand-img"><img src="{{ asset('src/assets/images/brands/orion/chocoboy.png') }}" class="w-9 h-9" alt=""></li>
      <li class="brand-img"><img src="{{ asset('src/assets/images/brands/orion/spin/chocopie.png') }}" class="w-9 h-9" alt=""></li>
      <li class="brand-img"><img src="{{ asset('src/assets/images/brands/orion/chocoboy.png') }}" class="w-9 h-9" alt=""></li>
      <li class="brand-img"><img src="{{ asset('src/assets/images/brands/orion/spin/chocopie-original.png') }}" class="w-9 h-9" alt=""></li>
      <li class="brand-img"><img src="{{ asset('src/assets/images/brands/orion/spin/chocoboy.png') }}" class="w-9 h-9" alt=""></li>
      <li class="brand-img"><img src="{{ asset('src/assets/images/brands/orion/spin/goute.png') }}" class="w-9 h-9" alt=""></li>
      <li class="brand-img"><img src="{{ asset('src/assets/images/brands/orion/spin/goute-packed.png') }}" class="w-9 h-9" alt=""></li>
      <li class="brand-img"><img src="{{ asset('src/assets/images/brands/orion/spin/chocopie-cherry.png') }}" class="w-9 h-9" alt=""></li>
      <li class="brand-img"><img src="{{ asset('src/assets/images/brands/orion/spin/chocopie-dark.png') }}" class="w-9 h-9" alt=""></li>
      <li class="brand-img"><img src="{{ asset('src/assets/images/brands/orion/spin/chocopie-raspberry.png') }}" class="w-9 h-9" alt=""></li>
  </ul>

  <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
      <ul class="tracking-[0.5px] mb-0 inline-block">
          <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Нүүр</a></li>
          <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
          <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="">Брэнд</a></li>
          <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
          <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">{{ Str::upper($brand->name) }}</li>
        </ul>
  </div>
</section><!--end section-->
<div class="relative">
  <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
      <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
  </div>
</div>
<!-- End Hero -->

<!-- FEATURES START -->
<section class="relative py-24 py-16">
  <div class="container relative disable-select">
      <div class="grid grid-cols-1 justify-center mt-2">
          <ul class="list-none text-center">
          <li class="inline-block md:m-6 my-6 mx-1">
                <a href="/brands/{{ $brand->id }}">
                    <img src="{{ Storage::url($brand->logo) }}" class="shadow-md dark:shadow-gray-800 rounded-full h-24 w-24 p-4" alt="">
                    <h6 class="mt-2 font-semibold">Бүгд</h6>
                </a>
            </li>
            @php $brandsubs = App\Models\BrandSub::select('id','name','logo')->where('brand_id',$brand->id)->get() @endphp
            @foreach($brandsubs as $brandsub)
            <li class="inline-block md:m-6 my-6 mx-1">
                <a href="/brands/{{ $brand->id }}/{{ $brandsub->id }}">
                    <img src="{{ Storage::url($brandsub->logo) }}" class="shadow-md dark:shadow-gray-800 rounded-full h-24 w-24 p-4" alt="">
                    <h6 class="mt-2 font-semibold">{{ $brandsub->name }}</h6>
                </a>
            </li>
            @endforeach
          </ul>
      </div>
  </div><!--end container-->
  
  <div class="container relative md:mt-24 mt-16">
      <div id="grid" class="md:flex justify-center mx-auto mt-4">
      @php $products = App\Models\Product::select('id','name','logo','brandsub_id')->where('brandsub_id',$brandsubid->id)->get() @endphp
        @foreach($products as $product)
          <div class="lg:w-1/4 md:w-1/3 p-3 picture-item" data-groups='["branding"]'>
              <div class="group relative block overflow-hidden rounded-md duration-500">
                  <a href="/brands/{{ $brand->id }}/{{ $brandsub->id }}/{{ $product->id }}"><img src="{{ Storage::url($product->logo) }}" class="rounded-md product-background" alt=""></a>
                  <div class="content pt-3">
                      <h5 class="mb-1"><a href="/brands/{{ $brand->id }}/{{ $brandsub->id }}/{{ $product->id }}" class="hover:text-indigo-600 duration-500 font-semibold">{{ $product->name }}</a></h5>
                      <h6 class="text-slate-400">{{ $product->brandsub->name }}</h6>
                  </div>
              </div>
          </div>
        @endforeach

      </div>
  </div>
  
  <!-- <div class="container relative md:mt-24 mt-16">
      <div class="flex mx-auto justify-center">
          <div class="lg:w-2/3 md:w-full">
              <div class="text-center">
                  <h4 class="text-3xl leading-normal font-semibold mb-6">Брэндийн танилцуулга</h4>
                  <p class="text-slate-400">Orion Групп 1956 оноос хойш 67 жилийн турш үйл ажиллагаа явуулж 60 гаруй улсад 100 гаруй брэнд бүтээгдэхүүн экспортолдог дэлхийн хамгийн том чихэр, жигнэмэг үйлдвэрлэгч компаниудын нэг юм.</p>
                  <p class="text-slate-400 mt-2">Тус компаниас Choco pie, Choco Boy, Fresh pie голчлон импортлон авдаг.</p>
              </div>
          </div>
      </div>
  </div> -->

  <!-- <div class="container relative md:mt-24 mt-16">
      <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
          <div class="relative order-1 md:order-2">
              <img src="assets/images/brands/orion/globus.png" class="mx-auto" alt="">
              <div class=""></div>
          </div>

          <div class="lg:me-8 order-2 md:order-1">
              <h4 class="mb-4 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">Гадаад салбарууд</h4>
              <p class="text-slate-400">Орионы төв оффис нь Өмнөд Солонгост байрладаг бөгөөд Орос, Хятад, Энэтхэг, Вьетнамд гадаадын салбарууд байдаг.</p>
          </div>
      </div>
  </div> -->

  <div class="container relative md:mt-24 mt-16">
      <div class="grid grid-cols-1 text-center">
          <span class="text-slate-400 mb-4">Бидэнтэй холбогдох</span>
          <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Бидэнтэй холбогдох уу?</h3>

          <div class="mt-6">
              <a href="/contact/fast" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full"><i class="uil uil-phone"></i> Холбоо барих</a>
          </div>
      </div>
  </div>
</section>
@endsection