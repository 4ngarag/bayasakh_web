<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
<head>
        <meta charset="UTF-8" />
        <title>@yield('title') - БАЯСАХ ХУЛЬЖ ХХК</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Bayasakh">
        <meta name="keywords" content="bayasakh">
        <meta name="author" content="4ngarag">
        <meta name="website" content="">
        <meta name="email" content="">
        <meta name="version" content="2.0.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('src/assets/images/favicon.ico') }}">

        <!-- Css -->
        <link href="{{ asset('src/assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
        <link href="{{ asset('src/assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('src/assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('src/assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('src/assets/css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('src/assets/css/worldmap.css') }}">
        <style>
            .disable-select {
                -webkit-user-select: none;
                -moz-user-select: none; 
                -ms-user-select: none;     
                user-select: none;
            }
        </style>
        @yield('styles')
    </head>
    
    <body class="font-manrope text-base text-black dark:text-white dark:bg-slate-900">

        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->

        <!-- Start Navbar -->
        @include('partials.header')
        <!-- End Navbar -->

        <!-- Start Hero -->
        @yield('content')
        <!-- End -->

        <!-- Footer Start -->
        @include('partials.footer')
        <!-- Footer End -->

        <!-- Start Cookie Popup -->
        <!-- <div class="cookie-popup fixed max-w-lg bottom-3 end-3 start-3 sm:start-0 mx-auto bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md py-5 px-6 z-50">
            <p class="text-slate-400">Нээлттэй ажлын байр зарлагдсан байна. Та <a href="page-job-grid.html" target="_blank" class="text-emerald-600 dark:text-emerald-500 font-semibold">энд дарж</a> анкетаа илгээх боломжтой</p>
            <div class="cookie-popup-actions text-end">
                <button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 end-2"><i class="uil uil-times text-dark dark:text-slate-200 text-2xl"></i></button>
            </div>
        </div> -->
        <!--Note: Cookies Js including in plugins.init.js (path like; assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
        <!-- End Cookie Popup -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-blue-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <!-- <div class="fixed top-[30%] -end-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] start-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div> -->
        <!-- Switcher -->

        <!-- JAVASCRIPTS -->
        @yield('scripts')
        <script src="{{ asset('src/assets/libs/shufflejs/shuffle.min.js') }}"></script> <!-- ! -->
        <script src="{{ asset('src/assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('src/assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('src/assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('src/assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('src/assets/js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>