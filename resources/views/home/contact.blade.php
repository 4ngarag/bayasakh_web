@extends('layouts.master')
@section('title')
ХОЛБОО БАРИХ
@endsection
@section('styles')

@endsection
@section('content')
<section class="relative table w-full py-36 bg-center bg-no-repeat" style="background-image: url('{{ asset('src/assets/images/company/job.jpg') }}') !important;">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal tracking-wide leading-normal font-medium text-white">Холбоо барих</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Нүүр</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Холбоо барих</li>
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
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            <div class="text-center px-6 mt-6">
                <div class="w-20 h-20 bg-blue-600/5 text-blue-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-phone"></i>
                </div>

                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Утас</h5>
                    <p class="text-slate-400 mt-3">...</p>
                    
                    <div class="mt-5">
                        <a href="tel:+97670001010" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">+976 7000-1010</a>
                    </div>
                </div>
            </div>

            <div class="text-center px-6 mt-6">
                <div class="w-20 h-20 bg-blue-600/5 text-blue-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-envelope"></i>
                </div>

                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Э-мэйл</h5>
                    <p class="text-slate-400 mt-3">...</p>
                    
                    <div class="mt-5">
                        <a href="mailto:info@bayasakh.com" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">info@bayasakh.com</a>
                    </div>
                </div>
            </div>

            <div class="text-center px-6 mt-6">
                <div class="w-20 h-20 bg-blue-600/5 text-blue-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-map-marker"></i>
                </div>

                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Хаяг</h5>
                    <p class="text-slate-400 mt-3">Баянзүрх дүүрэг <br> Улаанбаатар хот, Монгол улс</p>
                    
                    <div class="mt-5">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.0106711353956!2d106.9424363155851!3d47.91683097920643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d969223ede752a1%3A0x65a94722bbb24c2!2z0JHQsNGP0YHQsNGFINCl0YPQu9GM0LYg0KXQpdCa!5e0!3m2!1smn!2smn!4v1663204537564!5m2!1smn!2smn"
                        data-type="iframe" class="video-play-icon read-more lightbox relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Google map дээр харах</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-7 md:col-span-6">
                <img src="{{ asset('src/assets/images/contact.svg') }}" alt="">
            </div>

            <div class="lg:col-span-5 md:col-span-6 mt-8 md:mt-0">
                <div class="lg:ms-5">
                    <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 p-6">
                        <h3 class="mb-6 text-2xl leading-normal font-medium">Холбогдох !</h3>

                        <!-- <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()"> -->
                        <form method="get" action="thankyou" name="myForm" id="myForm">
                            <p class="mb-0" id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Таны нэр:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                            <input name="name" id="name" type="text" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Нэр :">
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="email" class="font-semibold">Таны э-мэйл хаяг:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                            <input name="email" id="email" type="email" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Э-мэйл :">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="text-start">
                                        <label for="subject" class="font-semibold">Холбогдох төрөл:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="book" class="w-4 h-4 absolute top-5 start-4"></i>
                                            <select class="form-select form-input ps-11 mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                                <option value="">Санал хүсэлт</option>
                                                <option value="">Гомдол</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <div class="text-start">
                                        <label for="comments" class="font-semibold">Таны сэтгэгдэл:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="message-circle" class="w-4 h-4 absolute top-3 start-4"></i>
                                            <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Мессэж :"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send" class="py-2 px-5 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center">Илгээх</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<div class="container-fluid relative">
    <div class="grid grid-cols-1">
        <div class="w-full leading-[0] border-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.0106711353956!2d106.9424363155851!3d47.91683097920643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d969223ede752a1%3A0x65a94722bbb24c2!2z0JHQsNGP0YHQsNGFINCl0YPQu9GM0LYg0KXQpdCa!5e0!3m2!1smn!2smn!4v1663204537564!5m2!1smn!2smn" style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
        </div>
    </div><!--end grid-->
</div>
@endsection