@extends('layouts.master')
@section('title')
БИДНИЙ ТУХАЙ
@endsection
@section('styles')

@endsection
@section('content')
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('src/assets/images/company/aboutus.jpg') }}') !important;">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Бидний тухай</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Нүүр</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="">Компани</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Бидний тухай</li>
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
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-5 md:col-span-6">
                <div class="grid grid-cols-12 gap-6 items-center">
                    <div class="col-span-6">
                        <div class="grid grid-cols-1 gap-6">
                            <img src="{{ asset('src/assets/images/about/ab03.jpg') }}" class="shadow rounded-md" alt="">
                            <img src="{{ asset('src/assets/images/about/ab02.jpg') }}" class="shadow rounded-md" alt="">
                        </div>
                    </div>

                    <div class="col-span-6">
                        <div class="grid grid-cols-1 gap-6">
                            <img src="{{ asset('src/assets/images/about/ab01.jpg') }}" class="shadow rounded-md" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 md:col-span-6">
                <div class="lg:ms-5">
                    <div class="flex mb-4">
                        <span class="text-blue-600 text-2xl font-bold mb-0"><span class="counter-value text-6xl font-bold" data-target="30">1</span>+</span>
                        <span class="self-end font-medium ms-2">жилийн <br> туршлага</span>
                    </div>

                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold" style="color: black;">Танилцуулга</h3>

                    <p class="max-w-xl">1993 онд “Баясах трейд” худалдааны компанийг  анх үүсгэн байгуулсан. Тухайн үедээ Монгол Улсын гадаад худалдааны салбарын ууган аж ахуйн нэгжүүдийн нэг байсан бөгөөд Монголдоо дэлхийн брэндийг нэвтрүүлж, шинэ брэнд бүтээгдэхүүнүүдийг монголын хэрэглэгчдэд таниулах томоохон хувьсал болсон юм.</p>
                    <br>
                    <p class="max-w-xl">Харин 2013 оноос компаний нэрээ <b>Баясах Хульж ХХК</b> хэмээн өөрчилж хүнс шингэн хүнс, ахуйн хэрэглээний бараа, Хөргүүрийн бүтээгдэхүүн, барилгын материал зэрэг салбарт охин компаниа нээж үйл ажиллагаагаа өргөтгөсөн. Өдгөө манай компани Монголын 21 аймгийн 6000 гаруй цэгт /нийт дотоод харилцагч дэлгүүрүүд/ бараа бүтээгдэхүүнээ нийлүүлж байна. Чанартай, гарал үүсэл тодорхой бүтээгдэхүүнээр дамжуулан хэрэглээний шинэ соёлыг түгээхэд манай эрхэм зорилго оршино.</p>
                
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Үнэт зүйлс</h3>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] mt-8">
            <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                    <i data-feather="trending-up" class="h-5 w-5 rotate-45"></i>
                </div>
                <div class="flex-1">
                    <h4 class="mb-0 text-lg font-medium">Хамтын ажиллагаа</h4>
                </div>
            </div>
            
            <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                    <i data-feather="users" class="h-5 w-5 rotate-45"></i>
                </div>
                <div class="flex-1">
                    <h4 class="mb-0 text-lg font-medium">Харилцагчид</h4>
                </div>
            </div>
            
            <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                    <i data-feather="heart" class="h-5 w-5 rotate-45"></i>
                </div>
                <div class="flex-1">
                    <h4 class="mb-0 text-lg font-medium">Компанийн соёл</h4>
                </div>
            </div>
            
        </div><!--end grid-->
        <div class="grid md:grid-cols-2 mt-8 gap-[30px]">
            <div class="rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 p-6">
                <h5 class="text-2xl font-semibold mb-4">Эрхэм зорилго</h5>
                <p class="mb-4">Чанартай, гарал үүсэл тодорхой бүтээгдэхүүнээр дамжуулан хэрэглээний шинэ соёлыг түгээнэ</p>
            </div>

            <div class="rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 p-6">
                <h5 class="text-2xl font-semibold mb-4">Алсын хараа</h5>
                <p class="mb-4">Бид Монголын хэрэглэгчдээ ирээдүйд эрүүл амьдрахад нь туслах жинхэнэ чанартай, гарал үүсэл тодорхой бүтээгдэхүүнийг хангахыг эрмэлздэг</p>
            </div>
        </div>
    </div><!--end contanier-->
</section>
@endsection
@section('scripts')

@endsection