@extends('layouts.master')
@section('title')
{{ Str::upper($product->name) }}
@endsection
@section('styles')
<style>
.product-background {background-color: lightgrey;}
</style>
@endsection
@section('content')
<section class="relative table w-full py-32 lg:py-40 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ Storage::url($product->brand->slider_image) }}') !important;">
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/80 to-black"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 text-3xl leading-normal font-medium text-white">{{ $product->name }}</h3>

            <!-- <ul class="list-none">
                <li class="inline font-semibold text-white/60 me-2"> <span class="text-white">Импортлогч :</span> ...</li>
                <li class="inline font-semibold text-white/60"> <span class="text-white">Date :</span> ...</li>
            </ul> -->
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Нүүр</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/brands/{{ $product->brand->id }}">{{ $product->brand->name }}</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/brands/{{ $product->brand->id }}/{{ $product->brandsub->id }}">{{ $product->brandsub->name }}</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">{{ $product->name }}</li>
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

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-5 md:col-span-6">
                <div class="grid grid-cols-1 gap-[30px]">
                    <img src="{{ Storage::url($product->logo) }}" class="rounded-md" alt="">
                </div>
            </div>

            <div class="lg:col-span-7 md:col-span-6">
                <div class="sticky top-20">
                    <div class="grid lg:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-12">
                            <div class="work-details">
                                <h4 class="text-xl font-semibold mb-3 border-b border-gray-100 dark:border-gray-700 pb-3">Танилцуулга :</h4>
                                <p>{{ $product->intro_mn }}</p>
                            </div>
                        </div>
                        
                        <div class="lg:col-span-7">
                            <div class="bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 p-6 rounded-md">
                                <h5 class="text-lg font-semibold border-b border-gray-100 dark:border-gray-700 pb-3 mb-3">Биднийг дагах :</h5>
                                <ul class="list-none">
                                    <li class="inline"><a href="https://www.facebook.com/bayasakh.khulij" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="https://www.instagram.com/bayasakh.khulij/" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="https://www.youtube.com/channel/UCmAIiojWph9rDZ29HnBikvg" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
                                </ul> 
                            </div>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative py-5">
        <div class="grid grid-cols-1">
            <div class="tiny-single-item">
                <div class="tiny-slide">
                    <div class="m-2">
                        <img src="{{ Storage::url($product->brand->slider_image) }}" class="rounded-md shadow dark:shadow-gray-800" alt="">
                    </div>
                </div>

                <div class="tiny-slide">
                    <div class="m-2">
                        <img src="{{ Storage::url($product->brand->slider_image) }}" class="rounded-md shadow dark:shadow-gray-800" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

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