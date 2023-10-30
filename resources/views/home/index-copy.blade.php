@extends('layouts.master')
@section('title')
НҮҮР ХУУДАС
@endsection
@section('styles')

@endsection
@section('content')
<section class="relative md:py-60 py-36 items-center">
    <div class="absolute top-0 start-0 w-full h-full z-0 pointer-events-none overflow-hidden">
        <!-- <iframe src="https://player.vimeo.com/video/33955001?background=1&autoplay=1&loop=1&byline=0&title=0" class="absolute top-1/2 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2  -translate-y-1/2 w-screen h-[56.25vw] min-h-screen min-w-[177.77vw]"></iframe> -->
        <!--Note: Vimeo Embed Background Video-->

        <iframe src="https://www.youtube.com/embed/ghQ276o9gvw?controls=0&showinfo=0&rel=0&autoplay=1&playlist=ghQ276o9gvw&loop=1&mute=1" class="absolute top-1/2 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2  -translate-y-1/2 w-screen h-[56.25vw] min-h-screen min-w-[177.77vw]"></iframe>
        <!--Note: Youtube Embed Background Video-->
    </div>
    <div class="absolute inset-0 opacity-20 bg-[url('../../assets/images/map.svg')] bg-no-repeat bg-center bg-cover" style="visibility: hidden;"></div>
    <div class="absolute inset-0 bg-black/70"></div>

    <div class="container relative" style="visibility: hidden;">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <img src="assets/images/logo-icon-64.png" class="block mx-auto animate-[spin_10s_linear_infinite]" alt="">
            <h3 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 mt-10 text-white">Coworking Just Feels Right</h3>

            <p class="text-slate-300 text-lg max-w-2xl mx-auto">Coworking spaces offer a wealth of advantages for <br><br>self starters, including networking opportunities, daily structure, and increased productivity.</p>
        
            <div class="subcribe-form z-1 mt-8">
                <form class="relative mx-auto max-w-xl">
                    <i data-feather="map-pin" class="w-5 h-5 absolute top-[48%] -translate-y-1/2 start-4"></i>
                    <input type="text" id="search_name" name="name" class="pt-4 pe-40 pb-4 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 ps-12" placeholder="Washington, D.C.">
                    <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Find A Space</button>
                </form><!--end form-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section>

<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-blue-600">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- START -->
<section class="relative bg-blue-600 py-10">
    <div class="container relative disable-select">
        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-four-item">
                @php $companies = App\Models\Company::select('id','name_mn','intro_mn','logo_ru')->get() @endphp
				@foreach($companies as $company)
                <div class="tiny-slide">
                    <div class="group px-6 py-8 hover:bg-blue-700 duration-500 ease-in-out">
                        <img src="{{ Storage::url($company->logo_ru) }}" class="rounded-full shadow-md h-10 w-10 mx-left block" draggable="false" alt="">

                        <div class="content mt-6">
                            <a href="page-job-company-khulij.html" class="text-lg font-semibold text-white/80 hover:text-white">{{ $company->name_mn }}</a>
                            <p class="text-white/50 mt-4">{{ $company->intro_mn }}</p>
                            
                            <div class="mt-5">
                                <a href="company/{{ $company->id }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-white hover:text-white after:bg-white duration-500 ease-in-out">Дэлгэрэнгүй танилцах <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <!-- <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-4 md:col-span-6 lg:order-1 order-2 lg:text-center">
                <a href="#!" data-type="youtube" data-id="ghQ276o9gvw" class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white duration-500 ease-in-out mx-auto">
                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                </a>

                <h6 class="text-blue-600 text-sm font-bold uppercase mt-8 mb-2">Бидний тухай</h6>
                <h3 class="mb-4 md:text-4xl md:leading-normal text-3xl leading-normal font-bold">Танилцуулга</h3>
                <p class="text-slate-400 max-w-xl">1993 онд “Баясах трейд” худалдааны компанийг 40 хүний бүрэлдэхүүнтэй анх үүсгэн байгуулсан.</p>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6 lg:order-2 order-1">
                <img src="assets/images/corporate/experience-wall.jpg" class="shadow-md dark:shadow-gray-800" alt="">
            </div>
            
            <div class="lg:col-span-4 md:col-span-12 lg:order-3 order-2">
                <p class="text-slate-400">Харин 2013 оноос компаний нэрээ<br><span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-blue-600 relative inline-block"><span class="relative text-white">Баясах Хульж ХХК</span></span> хэмээн өөрчилж</p>
                <ul class="list-none text-slate-400 mt-4">
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-blue-600 text-xl me-2"></i> Хүнс, шингэн хүнс</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-blue-600 text-xl me-2"></i> Хөргүүрийн бүтээгдэхүүн</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-blue-600 text-xl me-2"></i> Банк бус санхүүгийн байгууллага</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-blue-600 text-xl me-2"></i> Барилгын материал</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-blue-600 text-xl me-2"></i> Сүлжээ дэлгүүр</li>
                </ul>
                <p class="text-slate-400">зэрэг салбаруудад охин компаниа нээж үйл ажиллагаагаа өргөтгөсөөр байна.</p>
            </div>
        </div>
    </div> -->

    <div class="container relative">
        <div class="absolute inset-0 opacity-25 dark:opacity-50 bg-[url('../../assets/images/map.png')] bg-no-repeat bg-center bg-cover"></div>
        <div class="world-map disable-select">
            <img draggable="false" src="{{ asset('src/assets/images/worldmap.png') }}" alt="map" />
            <div class="pin-wearehere mongolia">
                <span>Монгол</span>
            </div>
            <div class="pin russia">
                <span>Орос</span>
            </div>
            <div class="pin singapore">
                <span>Сингапур</span>
            </div>
            <div class="pin-right vietnam">
                <span>Вьетнам</span>
            </div>
            <div class="pin-right indonesia">
                <span>Индонез</span>
            </div>
            <div class="pin-right korea">
                <span>Солонгос</span>
            </div>
            <div class="pin denmark">
                <span>Дани</span>
            </div>
            <div class="pin-right france">
                <span>Франц</span>
            </div>
            <div class="pin poland">
                <span>Польш</span>
            </div>
            <div class="pin ukraine">
                <span>Украин</span>
            </div>
            <div class="pin-right moldova">
                <span>Молдова</span>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
    <div class="container relative mt-12">
        <div class="grid grid-cols-2 md:grid-cols-5">
            <div class="counter-box relative text-center">
                <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value" data-target="60">3</span>+</h3>
                <span class="counter-head font-semibold text-xl absolute top-2/4 start-0 end-0">Брэнд</span>
            </div><!--end counter box-->

            <div class="counter-box relative text-center">
                <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value" data-target="30">1</span>+</h3>
                <span class="counter-head font-semibold text-xl absolute top-2/4 start-0 end-0">Жилийн туршлага</span>
            </div><!--end counter box-->

            <div class="counter-box relative text-center">
                <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value" data-target="3">1</span></h3>
                <span class="counter-head font-semibold text-xl absolute top-2/4 start-0 end-0">Агуулах</span>
            </div><!--end counter box-->

            <div class="counter-box relative text-center">
                <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value" data-target="4">1</span></h3>
                <span class="counter-head font-semibold text-xl absolute top-2/4 start-0 end-0">Супермаркет</span>
            </div><!--end counter box-->

            <div class="counter-box relative text-center">
                <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value" data-target="200">12</span>+</h3>
                <span class="counter-head font-semibold text-xl absolute top-2/4 start-0 end-0">Ажиллах хүч</span>
            </div><!--end counter box-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Section-->
<!-- <section class="relative pb-16">
    <div class="container relative">
        <div class="relative grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Брэндүүд</h3>
        </div>
        <div class="grid grid-cols-1 items-center gap-[30px]">
            <div class="filters-group-wrap text-center">
                <div class="filters-group">
                    <ul class="mb-0 list-none container-filter-border-bottom filter-options">
                        <li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500 active" data-group="all">Бүгд</li>
                        <li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="khulij">ХООЛ ХҮНС, УНДАА</li>
                        <li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="ashiddari">ХӨРГҮҮРИЙН БҮТЭЭГДЭХҮҮН</li>
                        <li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="khulijgoo">АХУЙН БАРАА</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="grid" class="md:flex justify-center mx-auto mt-4">
            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <a href="portfolio-detail-two.html"><img src="assets/images/portfolio/1.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt=""></a>
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/2.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["ashiddari"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/3.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="60" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/4.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="60" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/5.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/6.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/7.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/8.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/9.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["ashiddari"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/10.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/11.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/12.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/13.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulij"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/14.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["khulijgoo"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/15.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>

            <div class="lg:w-1/6 md:w-1/2 p-4 picture-item" data-groups='["ashiddari"]'>
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <img src="assets/images/portfolio/16.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" width="100" height="100" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->

<div class="container-fluid relative disable-select">
    <div class="grid grid-cols-1 relative">
        <div class="tiny-twelve-item">
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="brand-orion.html" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/orion.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="brand-samyang-foods.html" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/samyang.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="#" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/samyang buldak.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="#" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/alibi.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="#" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/appetita.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="#" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/dasida.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="#" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/rollton.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="#" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/bigbon.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="#" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/siesta.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="#" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/siesta_oil.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="#" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/vigora.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="brand-hitejinro-terra.html" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/terra.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="brand-hitejinro-soju.html" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/jinro-soju.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="brand-orion.html" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/pokka.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="#" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/kopiko.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="#" class="d-inline-block" title="">
                            <img src="{{ asset('src/assets/images/brands/logo/SEMPIO.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div><!--end grid-->
</div><!--end container-->
<!-- End Section-->

<!-- Start -->
<!-- <section class="py-20 w-full table relative bg-[url('../../assets/images/team.jpg')] bg-center bg-no-repeat">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Өнөөдрийн онцлох жор.</h3>

            <p class="text-white/80 max-w-xl mx-auto">Органик амтлагч нь уураар жигнэж ариутгал хийгдсэн генийн өөрлчлөлтгүй бүтээгдэхүүн бөгөөд өнгө оруулагч хадгалах бодисгүй.</p>
        
            <a href="#!" data-type="youtube" data-id="5kPVeFT2T7w" class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-blue-600 mx-auto mt-10">
                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
            </a>
        </div>
    </div>
</section> -->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Нийгмийн хариуцлага</h3>
                <p class="text-slate-400 max-w-xl">...</p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="social-responsibility.html" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Бүгдийг үзэх <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->

        <div class="sm:flex mt-4" id="grid">
            <div class="sm:w-1/2 picture-item p-4 rounded-md">
                <div class="">
                    <div class="relative">
                        <div class="shadow dark:shadow-gray-800 p-5 pb-0 rounded-md bg-blue-600/5 dark:bg-blue-600/30">
                            <img src="assets/images/portfolio/01.html" class="rounded-t-md shadow" alt="">
                        </div>
                    </div>

                    <div class="pt-4 px-3">
                        <h5 class="mb-1 font-semibold text-xl"><a href="#" target="_blank" class="hover:text-indigo-600 duration-500">Гарчиг</a></h5>
                        <span class="text-slate-400">...</span>
                    </div>                            
                </div>
            </div><!--end col-->

            <div class="sm:w-1/2 picture-item p-4 rounded-md">
                <div class="">
                    <div class="relative">
                        <div class="shadow dark:shadow-gray-800 p-5 pb-0 rounded-md bg-emerald-600/5 dark:bg-emerald-600/30">
                            <img src="assets/images/portfolio/02.html" class="rounded-t-md shadow" alt="">
                        </div>
                    </div>

                    <div class="pt-4 px-3">
                        <h5 class="mb-1 font-semibold text-xl"><a href="#" target="_blank" class="hover:text-emerald-600 transition-all duration-500 ease-in-out">Гарчиг</a></h5>
                        <span class="text-slate-400">...</span>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Шинэ мэдээлэл</h3>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            @foreach($posts as $count => $post)
            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                <img src="{{ Storage::url($post->image) }}" alt="">

                <div class="content p-6">
                    <a href="news/{{ $post->id }}" class="title h5 text-lg font-medium hover:text-blue-600 duration-500 ease-in-out">{{ Str::limit($post->title_mn, 30) }}</a>
                    <p class="text-slate-400 mt-3">{{ Str::limit($post->full_text_mn, 76) }}</p>
                    
                    <div class="mt-4">
                        <a href="news/{{ $post->id }}" class="btn btn-link font-normal hover:text-blue-600 after:bg-blue-600 duration-500 ease-in-out">Дэлгэрэнгүй үзэх <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--end grid-->
    </div><!--end container-->
</section>
@endsection
@section('scripts')

@endsection