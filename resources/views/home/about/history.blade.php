@extends('layouts.master')
@section('title')
БИДНИЙ ТҮҮХ
@endsection
@section('styles')

@endsection
@section('content')
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('src/assets/images/company/aboutus.jpg') }}') !important;">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Бидний түүх</h3>
        </div>
    </div>
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Нүүр</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="">Компани</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Бидний түүх</li>
            </ul>
    </div>
</section>
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-blue-600 text-sm font-bold uppercase mb-2">Он цагын хэлхээс</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Бидний түүх</h3>

            <p class="text-slate-400 max-w-xl mx-auto">...</p>
        </div>

        <div class="grid grid-cols-1 mt-8">
            <div class="relative after:content-[''] after:absolute after:top-0 md:after:end-0 md:after:start-0 after:w-px after:h-full md:after:m-auto after:border-s-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ms-3 md:ms-0">
                <div class="ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="grid md:grid-cols-2">
                        <div class="md:text-end md:me-8 relative">
                            <img src="{{ asset('src/assets/images/company/bayasakh-trade.png') }}" class="rounded-full h-9 w-9 md:ms-auto" alt="">
                            <h5 class="my-2 font-semibold text-lg">Баясах Трейд</h5>
                            <span class="bg-transparent border border-indigo-600 text-indigo-600 text-[12px] font-semibold px-2.5 py-0.5 rounded-full h-5">1993</span>
                        </div>

                        <div class="ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0">
                            <h5 class="title mb-1 font-semibold">Эхлэл</h5>
                            <p class="mt-3 mb-0">1993 онд “Баясах трейд” худалдааны компанийг 40 хүний бүрэлдэхүүнтэй анх үүсгэн байгуулсан.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="grid md:grid-cols-2">
                        <div class="text-start ms-8 relative md:order-2">
                            <img src="{{ asset('src/assets/images/company/urgoo-logo.png') }}" class="rounded-full h-9 w-9 md:me-auto" alt="">
                            <h5 class="my-2 font-semibold text-lg">Баясах Өргөө ХХК</h5>
                            <!-- <h6 class="text-slate text-sm mb-0">2003</h6> -->
                            <span class="bg-transparent border border-indigo-600 text-indigo-600 text-[12px] font-semibold px-2.5 py-0.5 rounded-full h-5">2003</span>
                        </div>

                        <div class="ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1">
                            <h5 class="title mb-1 font-semibold">Баясах Өргөө ХХК үүсгэн байгуулагдав. </h5>
                            <p class="mt-3 mb-0">2003 оны 12 дугаар сарын 03 нд "HIT-1" супермаркетыг, 2007 оны 2 сард "HIT-2" супермаркетыг ашиглалтад оруулж 2010 оны 12-р сараас үйл ажиллагаагаа өргөжүүлэн Сүлжээ супермаркетын стандартад нийцүүлэн “Баясах супермаркет” нэртэйгээр 4 салбар дэлгүүрүүдээ нээсэн.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="grid md:grid-cols-2">
                        <div class="md:text-end md:me-8 relative">
                            <img src="{{ asset('src/assets/images/company/khulij-logo.png') }}" class="rounded-full h-9 w-9 md:ms-auto" alt="">
                            <h5 class="my-2 font-semibold text-lg">Баясах Хульж ХХК</h5>
                            <span class="bg-transparent border border-indigo-600 text-indigo-600 text-[12px] font-semibold px-2.5 py-0.5 rounded-full h-5">2013</span>
                        </div>

                        <div class="ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0">
                            <h5 class="title mb-1 font-semibold">Баясах трейд => Баясах Хульж ХХК</h5>
                            <p class="mt-3 mb-0">2013 оноос компаний нэрээ Баясах Хульж ХХК хэмээн өөрчилж хүнс шингэн хүнс, ахуйн хэрэглээний бараа, Хөргүүрийн бүтээгдэхүүн, банк бус санхүүгийн байгууллага, барилгын материал зэрэг салбарт охин компаниа нээж үйл ажиллагаагаа өргөтгөсөн.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="grid md:grid-cols-2">
                        <div class="text-start ms-8 relative md:order-2">
                            <img src="{{ asset('src/assets/images/company/trust-logo.png') }}" class="rounded-full h-9 w-9 md:me-auto" alt="">
                            <h5 class="my-2 font-semibold text-lg">Трастфинанс ББСБ</h5>
                            <span class="bg-transparent border border-indigo-600 text-indigo-600 text-[12px] font-semibold px-2.5 py-0.5 rounded-full h-5">2017</span>
                        </div>

                        <div class="ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1">
                            <h5 class="title mb-1 font-semibold">Трастфинанс ББСБ үүсгэн байгуулагдав</h5>
                            <p class="mt-3 mb-0">"Трастфинанс ББСБ" ХХК 2017 онд СЗХ-с зөвшөөрөлөө авч үйл ажиллагаагаа эхэлсэн. Бид одоогоор зөвхөн зээлийн үйлчилгээ үзүүлж байгаа бөгөөд цаашид Финтек чиглэлээр үйл ажиллагаагаа өргөтгөхөөр судлаж байна.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="grid md:grid-cols-2">
                        <div class="md:text-end md:me-8 relative">
                            <img src="{{ asset('src/assets/images/company/construction-logo.png') }}" class="rounded-full h-9 w-9 md:ms-auto" alt="">
                            <h5 class="my-2 font-semibold text-lg">Баясах Констракшн ХХК</h5>
                            <span class="bg-transparent border border-indigo-600 text-indigo-600 text-[12px] font-semibold px-2.5 py-0.5 rounded-full h-5">2018</span>
                        </div>

                        <div class="ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0">
                            <h5 class="title mb-1 font-semibold">Баясах Констракшн ХХК үүсгэн байгуулагдав</h5>
                            <p class="mt-3 mb-0">Монгол улсын хөгжилд үнэтэй хувь нэмэр оруулж буй Барилгын компаниудад БНХАУ-ын барилгын материалын нийлүүлэлт хийж байна.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="grid md:grid-cols-2">
                        <div class="text-start ms-8 relative md:order-2">
                            <img src="{{ asset('src/assets/images/company/goo-logo.png') }}" class="rounded-full h-9 w-9 md:me-auto" alt="">
                            <h5 class="my-2 font-semibold text-lg">Хульж Гоо ХХК</h5>
                            <span class="bg-transparent border border-indigo-600 text-indigo-600 text-[12px] font-semibold px-2.5 py-0.5 rounded-full h-5">2019</span>
                        </div>

                        <div class="ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1">
                            <h5 class="title mb-1 font-semibold">Хульж Гоо ХХК үүсгэн байгуулагдав</h5>
                            <p class="mt-3 mb-0">Хойд хөрш ОХУ-н "Невская Косметика" ХХК, Украйн улсын "Киевский картонно-бумажный комбинат" ХХК, Саянскхимпласт ХХК-тай хамтарч ажилладаг бөгөөд эдгээр компаний нийт 240 гаруй нэр төрлийн гоо сайхан, ахуйн барааг импортоор оруулж ирж, хэрэглэгчдэд нийлүүлж байна.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:end-0 md:after:start-0 after:-start-9 before:content-[''] before:absolute md:before:mx-auto md:before:end-0 md:before:start-0 before:-start-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="grid md:grid-cols-2">
                        <div class="md:text-end md:me-8 relative">
                            <img src="{{ asset('src/assets/images/company/ashid-logo.png') }}" class="rounded-full h-9 w-9 md:ms-auto" alt="">
                            <h5 class="my-2 font-semibold text-lg">Ашиддарь ХХК</h5>
                            <span class="bg-transparent border border-indigo-600 text-indigo-600 text-[12px] font-semibold px-2.5 py-0.5 rounded-full h-5">2021</span>
                        </div>

                        <div class="ltr:float-left rtl:float-right text-start ms-8 mt-6 md:mt-0">
                            <h5 class="title mb-1 font-semibold">Ашиддарь ХХК үүсгэн байгуулагдав</h5>
                            <p class="mt-3 mb-0">Дани улсаас төрөл бүрийн сүү сүүн бүтээгдэхүүнийг импортлон зах зээлд нэвтрүүлж, 60 гаруй нэр төрлийн өргөн хэрэглээний бүтээгдэхүүн Монголын зах зээлд нийлүүлж байна.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection