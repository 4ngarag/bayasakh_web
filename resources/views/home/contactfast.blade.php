<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>ХОЛБОГДОХ - БАЯСАХ ХУЛЬЖ ХХК</title>
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
        <!-- Main Css -->
        <link href="{{ asset('src/assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('src/assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('src/assets/css/tailwind.css') }}">

    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
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
        <section class="md:h-screen flex py-36 w-full items-center bg-[url('../../src/assets/images/cta.jpg')] bg-center bg-no-repeat bg-cover">
            <div class="absolute inset-0 bg-black/70"></div>
            <div class="container relative">
                <div class="lg:flex justify-center mt-12">
                    <div class="lg:w-11/12 bg-white dark:bg-slate-900 rounded-md shadow-lg dark:shadow-gray-800 overflow-hidden">
                        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                            <div class="lg:col-span-7 md:col-span-6">
                                <div class="w-full leading-[0] border-0">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.0106711353956!2d106.9424363155851!3d47.91683097920643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d969223ede752a1%3A0x65a94722bbb24c2!2z0JHQsNGP0YHQsNGFINCl0YPQu9GM0LYg0KXQpdCa!5e0!3m2!1smn!2smn!4v1663204537564!5m2!1smn!2smn" style="border:0" class="w-full lg:h-[540px] md:h-[600px] h-[200px]" allowfullscreen></iframe>
                                </div>
                            </div>
                            
                            <div class="lg:col-span-5 md:col-span-6">
                                <div class="p-6">
                                    <h3 class="mb-6 text-2xl leading-normal font-medium">Бидэнтэй холбогдох</h3>
                                    <p class="text-slate-400">Бид гадаадын 10 улсын 20 орчим компанийн 60 гаруй брэнд 400 орчим нэр төрлийн бүтээгдэхүүнийг Монголын зах зээлд нийлүүлж байна.</p>
                                    
                                    <div class="flex items-center mt-6">
                                        <i data-feather="mail" class="w-6 h-6 me-4"></i>
                                        <div class="">
                                            <h5 class="title font-bold mb-0">Email</h5>
                                            <a href="mailto:info@bayasakh.com" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">info@bayasakh.com</a>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center mt-6">
                                        <i data-feather="phone" class="w-6 h-6 me-4"></i>
                                        <div class="">
                                            <h5 class="title font-bold mb-0">Phone</h5>
                                            <a href="tel:+97670001010" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">+976 7000-1010</a>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center mt-6">
                                        <i data-feather="map-pin" class="w-6 h-6 me-4"></i>
                                        <div class="">
                                            <h5 class="title font-bold mb-0">Location</h5>
                                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.0106711353956!2d106.9424363155851!3d47.91683097920643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d969223ede752a1%3A0x65a94722bbb24c2!2z0JHQsNGP0YHQsNGFINCl0YPQu9GM0LYg0KXQpdCa!5e0!3m2!1smn!2smn!4v1663204537564!5m2!1smn!2smn" data-type="iframe" class="video-play-icon relative inline-block font-semibold tracking-wide align-middle ease-in-out text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 lightbox">View on Google map</a>
                                        </div>
                                    </div>

                                    <ul class="list-none mt-6">
                                        <li class="inline"><a href="https://www.facebook.com/bayasakh.khulij" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="https://www.instagram.com/bayasakh.khulij/" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="https://www.youtube.com/channel/UCmAIiojWph9rDZ29HnBikvg" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="mailto:info@bayasakh.com" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="mail" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="tel:+97670001010" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="phone" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="https://www.zangia.mn/company/BAYASAKH-KHULIJ-LLC" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="file" class="h-4 w-4"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <div class="flex justify-center text-center p-6 border-t border-gray-100 dark:border-gray-800">
                                    <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> БАЯСАХ ХУЛЬЖ ХХК.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <div class="fixed bottom-3 end-3">
            <a href="/" class="back-button h-9 w-9 inline-flex items-center justify-center tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full"><i data-feather="arrow-left" class="h-4 w-4"></i></a>
        </div>

        <!-- Switcher -->
        <!-- <div class="fixed top-[30%] -right-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div> -->
        <!-- Switcher -->

        <!-- JAVASCRIPTS -->
        <script src="{{ asset('src/assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('src/assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('src/assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('src/assets/js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>