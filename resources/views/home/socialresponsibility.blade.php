@extends('layouts.master')
@section('title')
НИЙГМИЙН ХАРИУЦЛАГА
@endsection
@section('styles')

@endsection
@section('content')
<section class="relative md:py-60 py-36 bg-right bg-no-repeat" style="background-image: url('{{ asset('src/assets/images/company/aboutus2.jpg') }}') !important;">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 items-center mt-10">
            <span class="text-white/80 font-semibold mb-4 text-lg">Шинээр хийгдсэн нийгмийн хариуцлагын ажил</span>
            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Гарчиг</h4>
            <p class="text-white/60 text-lg max-w-xl">...</p>
        
            <div class="mt-8">
                <a href="#" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-50 hover:bg-gray-100 border-gray-50 hover:border-gray-100 text-slate-900 rounded-full">Дэлгэрэнгүй <i class="uil uil-arrow-right"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Нийгмийн хариуцлага</h3>
                <p class="text-slate-400 max-w-xl">Бидний нийгмийн хариуцлагын хүрээнд хийгдсэн ажлуудтай танилцана уу.</p>
            </div>
        </div><!--end grid-->

        <div class="sm:flex mt-4" id="grid">
            <div class="lg:w-1/3 sm:w-1/2 picture-item p-4 rounded-md">
                <div class="">
                    <div class="relative">
                        <div class="shadow dark:shadow-gray-800 p-5 pb-0 rounded-md bg-blue-600/5 dark:bg-blue-600/30">
                            <img src="assets/images/portfolio/pro1.html" class="rounded-t-md shadow" alt="">
                        </div>
                    </div>

                    <div class="pt-4 px-3">
                        <h5 class="mb-1 font-semibold text-lg"><a href="#" target="_blank" class="hover:text-indigo-600 duration-500">Гарчиг</a></h5>
                        <span class="text-slate-400">...</span>
                    </div>                            
                </div>
            </div><!--end col-->

            <div class="lg:w-1/3 sm:w-1/2 picture-item p-4 rounded-md">
                <div class="">
                    <div class="relative">
                        <div class="shadow dark:shadow-gray-800 p-5 pb-0 rounded-md bg-emerald-600/5 dark:bg-emerald-600/30">
                            <img src="assets/images/portfolio/pro2.html" class="rounded-t-md shadow" alt="">
                        </div>
                    </div>

                    <div class="pt-4 px-3">
                        <h5 class="mb-1 font-semibold text-lg"><a href="#" target="_blank" class="hover:text-emerald-600 transition-all duration-500 ease-in-out">Гарчиг</a></h5>
                        <span class="text-slate-400">...</span>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:w-1/3 sm:w-1/2 picture-item p-4 rounded-md">
                <div class="">
                    <div class="relative">
                        <div class="shadow dark:shadow-gray-800 p-5 pb-0 rounded-md bg-red-600/5 dark:bg-red-600/30">
                            <img src="assets/images/portfolio/pro3.html" class="rounded-t-md shadow" alt="">
                        </div>
                    </div>

                    <div class="pt-4 px-3">
                        <h5 class="mb-1 font-semibold text-lg"><a href="#" target="_blank" class="hover:text-red-600 transition-all duration-500 ease-in-out">Гарчиг</a></h5>
                        <span class="text-slate-400">...</span>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:w-1/3 sm:w-1/2 picture-item p-4 rounded-md">
                <div class="">
                    <div class="relative">
                        <div class="shadow dark:shadow-gray-800 p-5 pb-0 rounded-md bg-sky-600/5 dark:bg-sky-600/30">
                            <img src="assets/images/portfolio/pro4.html" class="rounded-t-md shadow" alt="">
                        </div>
                    </div>

                    <div class="pt-4 px-3">
                        <h5 class="mb-1 font-semibold text-lg"><a href="#" target="_blank" class="hover:text-sky-600 transition-all duration-500 ease-in-out">Гарчиг</a></h5>
                        <span class="text-slate-400">...</span>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:w-1/3 sm:w-1/2 picture-item p-4 rounded-md">
                <div class="">
                    <div class="relative">
                        <div class="shadow dark:shadow-gray-800 p-5 pb-0 rounded-md bg-amber-600/5 dark:bg-amber-600/30">
                            <img src="assets/images/portfolio/pro5.html" class="rounded-t-md shadow" alt="">
                        </div>
                    </div>

                    <div class="pt-4 px-3">
                        <h5 class="mb-1 font-semibold text-lg"><a href="#" target="_blank" class="hover:text-amber-600 transition-all duration-500 ease-in-out">Гарчиг</a></h5>
                        <span class="text-slate-400">...</span>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:w-1/3 sm:w-1/2 picture-item p-4 rounded-md">
                <div class="">
                    <div class="relative">
                        <div class="shadow dark:shadow-gray-800 p-5 pb-0 rounded-md bg-blue-600/5 dark:bg-blue-600/30">
                            <img src="assets/images/portfolio/pro6.html" class="rounded-t-md shadow" alt="">
                        </div>
                    </div>

                    <div class="pt-4 px-3">
                        <h5 class="mb-1 font-semibold text-lg"><a href="#" target="_blank" class="hover:text-indigo-600 duration-500">Гарчиг</a></h5>
                        <span class="text-slate-400">...</span>
                    </div>
                </div>
            </div><!--end col-->
        </div>

        <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
            <div class="md:col-span-12 text-center">
                <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Бусад <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-black dark:text-white">Талархалын үгс</h3>

            <p class="text-slate-400 max-w-xl mx-auto">...</p>
        </div><!--end grid-->

        <div class="flex justify-center relative mt-16">
            <div class="relative md:w-1/2 w-full">
                <div class="absolute -top-20 md:-start-24 -start-0">
                    <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
                </div>

                <div class="absolute bottom-28 md:-end-24 -end-0">
                    <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
                </div>

                <div class="tiny-single-item">
                    <div class="tiny-slide">
                        <div class="text-center">
                            <p class="text-lg text-slate-400 italic"> " ... " </p>

                            <div class="text-center mt-5">
                                <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>

                                <img src="assets/images/client/default-user.png" class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Нэр</h6>
                                <span class="text-slate-400 text-sm">Менежер</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="text-center">
                            <p class="text-lg text-slate-400 italic"> " ... " </p>

                            <div class="text-center mt-5">
                                <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>

                                <img src="assets/images/client/default-user.png" class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Нэр</h6>
                                <span class="text-slate-400 text-sm">Менежер</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section>
@endsection
@section('scripts')

@endsection