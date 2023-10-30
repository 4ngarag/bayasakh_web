<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>ХҮНИЙ НӨӨЦ - БАЯСАХ ХУЛЬЖ ХХК</title>
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
        <link href="{{ asset('src/assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('src/assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('src/assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('src/assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('src/assets/css/tailwind.css') }}">

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
        <nav id="topnav" class="defaultscroll is-sticky">
            <div class="container relative">
                <!-- Logo container-->
                <a class="logo" href="/">
                    <img src="{{ asset('src/assets/images/logo-dark.png') }}" class="inline-block dark:hidden" width="138" height="24" alt="">
                    <img src="{{ asset('src/assets/images/logo-light.png') }}" class="hidden dark:inline-block" width="138" height="24" alt="">
                </a>

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    @include('partials.navigation', ['var' => ''])
                    <!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->

        <!-- Start Hero -->
        <section class="relative table w-full md:py-44 py-36">
            <div class="absolute inset-0 bg-indigo-600/5"></div>
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                    <div class="md:col-span-7">
                        <div class="md:me-6">
                            <span class="text-indigo-600 font-medium">ХҮНИЙ НӨӨЦ</span>
                            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Бидэнтэй нэгдэх</h4>
                            <p class="text-slate-400 text-lg max-w-xl">Шинээр зарлагдах нээлттэй ажлын байрны мэдээллийг цаг алдалгүй хүлээн авахыг хүсвэл доорх талбарт э-мэйл хаягаа бүртгүүлнэ үү.</p>
                        
                            <div class="subcribe-form mt-6 mb-3">
                                <form class="relative max-w-xl">
                                    <input type="email" id="subcribe" name="email" class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-800" placeholder="Таны э-мэйл хаяг :">
                                    <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Бүртгүүлэх <i class="uil uil-arrow-right"></i></button>
                                </form><!--end form-->
                            </div>

                            <span class="text-slate-400 font-medium">Тусламж хэрэгтэй юу? <a href="/contact/fast" class="text-indigo-600">Холбоо барих</a></span>
                        </div>
                    </div><!--end col-->

                    <div class="md:col-span-5">
                        <div class="relative">
                            <img src="{{ asset('src/assets/images/marketing.png') }}" alt="">
                            <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                                <a href="#!" data-type="youtube" data-id="ghQ276o9gvw"
                                    class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container -->
        </section><!--end section-->

        <section class="py-10 bg-indigo-600">
            <div class="container relative">
                <div class="grid grid-cols-2 md:grid-cols-4">
                    <div class="counter-box relative text-center">
                        <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10"><span class="counter-value" data-target="5">2</span></h3>
                        <span class="counter-head font-semibold text-xl text-white absolute top-2/4 start-0 end-0">Салбар компани</span>
                    </div><!--end counter box-->

                    <div class="counter-box relative text-center">
                        <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10"><span class="counter-value" data-target="3">1</span></h3>
                        <span class="counter-head font-semibold text-xl text-white absolute top-2/4 start-0 end-0">Агуулах</span>
                    </div><!--end counter box-->

                    <div class="counter-box relative text-center">
                        <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10"><span class="counter-value" data-target="4">1</span></h3>
                        <span class="counter-head font-semibold text-xl text-white absolute top-2/4 start-0 end-0">Супермаркет</span>
                    </div><!--end counter box-->

                    <div class="counter-box relative text-center">
                        <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10"><span class="counter-value" data-target="14">1</span>+</h3>
                        <span class="counter-head font-semibold text-xl text-white absolute top-2/4 start-0 end-0">Нээлттэй ажлын байр</span>
                    </div><!--end counter box-->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start Section-->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px] relative">
                    <div class="lg:col-span-8 md:col-span-12">
                        <div class="grid grid-cols-1 pb-8">
                            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Манайд ажилласанаар</h3>
        
                            <p class="text-slate-400 max-w-xl">Та манай байгууллагад ажилласанаар доорх хөнгөлөлтүүдийг эдлэх боломжтой.</p>
                        </div><!--end grid-->
                    
                        <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                            <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                                <i data-feather="gift" class="h-12 w-12 stroke-1 text-indigo-600"></i>
        
                                <div class="content mt-7">
                                    <a class="title h5 text-lg font-medium hover:text-indigo-600">Бэлэг</a>
                                    <p class="text-slate-400 mt-3">Хурим, хүүхдийн баяр, шинэ төрсөн хүүхдийн бэлэг</p>
                                </div>
                            </div>

                            <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                                <i data-feather="plus-square" class="h-12 w-12 stroke-1 text-indigo-600"></i>
        
                                <div class="content mt-7">
                                    <a class="title h5 text-lg font-medium hover:text-indigo-600">Эрүүл мэнд</a>
                                    <p class="text-slate-400 mt-3">Эрүүл мэндийн урьдчилан сэргийлэх үзлэг</p>
                                </div>
                            </div>

                            <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                                <i data-feather="user-check" class="h-12 w-12 stroke-1 text-indigo-600"></i>
        
                                <div class="content mt-7">
                                    <a class="title h5 text-lg font-medium hover:text-indigo-600">Тэтгэмж тусламж</a>
                                    <p class="text-slate-400 mt-3">Тэтгэмж, тусламжууд</p>
                                </div>
                            </div>

                            <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                                <i data-feather="shield" class="h-12 w-12 stroke-1 text-indigo-600"></i>
        
                                <div class="content mt-7">
                                    <a class="title h5 text-lg font-medium hover:text-indigo-600">Даатгал</a>
                                    <p class="text-slate-400 mt-3">Компанийн үйл ажиллагааны онцлогоос шалтгаалсан ажилтанд зориулсан даатгалууд</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 md:col-span-12">
                        <div class="grid lg:grid-cols-1 md:grid-cols-2 grid-cols-1 gap-[30px]">
                            <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                                <i data-feather="star" class="h-12 w-12 stroke-1 text-indigo-600"></i>
        
                                <div class="content mt-7">
                                    <a class="title h5 text-lg font-medium hover:text-indigo-600">Хөнгөлөлт</a>
                                    <p class="text-slate-400 mt-3">Ажлын байрны онцлогоос шалтгаалсан үүрэн утас, унааны хөнгөлөлтүүд</p>
                                </div>
                            </div>

                            <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900">
                                <i data-feather="credit-card" class="h-12 w-12 stroke-1 text-indigo-600"></i>
        
                                <div class="content mt-7">
                                    <a class="title h5 text-lg font-medium hover:text-indigo-600">Зээл</a>
                                    <p class="text-slate-400 mt-3">Хамтран ажиллагч банкуудаас хөнгөлөлттэй нөхцөлөөр зээл авах боломжууд</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden after:content-[''] after:absolute after:h-40 after:w-40 after:bg-red-600/5 after:top-2/4 after:start-0 after:-z-1 after:rounded-3xl after:animate-[spin_10s_linear_infinite]"></div>
                    <div class="overflow-hidden after:content-[''] after:absolute after:h-[512px] after:w-[512px] after:bg-indigo-600/5 after:top-1/4 after:end-0 after:-z-1 after:rounded-full"></div>
                </div><!--grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="md:col-span-6 order-1 md:order-2">
                        <div class="lg:ms-8">
                            <img src="{{ asset('src/assets/images/contact.svg') }}" alt="">
                        </div>
                    </div>

                    <div class="md:col-span-6 order2 md:order-1">
                        <div class="lg:me-5">
                            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">ГҮЙЦЭТГЭЛЭЭРХ ҮНЭЛГЭЭ</h6>
                            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Баясах Хульж ХХК <br> Захиргаа, хүний нөөцийн алба</h3>

                            <p class="text-slate-400 max-w-xl">Таныг найрсаг чадварлаг хамт олон, өсөн дэвших боломж, өрсөлдөхүйц цалин хөлс, нэмэлт урамшууллууд, ажлын тухтай орчин хүлээж байна.</p>

                            <ul class="list-none text-slate-400 my-6">
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Ур чадвараа нэмэгдүүлэх боломж</li>
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Өсөн дэвших боломж</li>
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Дадлага</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Section-->

        <!-- Start -->
        <section class="relative md:py-24 py-16 overflow-hidden">
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="lg:col-span-5 md:col-span-6">
                        <div class="lg:me-8">
                            <div class="relative">
                                <img src="{{ asset('src/assets/images/contact.svg') }}" alt="">
                                <div class="overflow-hidden absolute h-[512px] w-[512px] bg-indigo-600/5 top-1/4 start-0 end-0 align-middle -z-1 rounded-full"></div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7 md:col-span-6">
                        <div class="lg:ms-5">
                            <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 p-6">
                                <h3 class="mb-6 text-2xl leading-normal font-medium">Холбогдох !</h3>

                                <!-- <form method="post" name="myForm" id="myForm" onsubmit="/thankyou"> -->
                                <form method="get" action="/thankyou" name="myForm" id="myForm">
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

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                    <div class="text-center px-6">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-phone"></i>
                        </div>

                        <div class="content mt-7">
                            <h5 class="text-xl font-semibold">Утас</h5>
                            <p class="text-slate-400 mt-3"></p>
                            
                            <div class="mt-5">
                                <a href="tel:+97670001010" class="text-indigo-600 font-medium">+976 7000-1010</a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center px-6">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-envelope"></i>
                        </div>

                        <div class="content mt-7">
                            <h5 class="text-xl font-semibold">Э-мэйл</h5>
                            <p class="text-slate-400 mt-3"></p>
                            
                            <div class="mt-5">
                                <a href="info@bayasakh.com" class="text-indigo-600 font-medium">info@bayasakh.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center px-6">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-map-marker"></i>
                        </div>

                        <div class="content mt-7">
                            <h5 class="text-xl font-semibold">Хаяг</h5>
                            <p class="text-slate-400 mt-3">Баясах Хульж ХХК байр, Намянжүгийн гудамж, 14-р хороо, Баянзүрх дүүрэг, Улаанбаатар хот, Монгол Улс</p>
                            
                            <div class="mt-5">
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.0106711353956!2d106.9424363155851!3d47.91683097920643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d969223ede752a1%3A0x65a94722bbb24c2!2z0JHQsNGP0YHQsNGFINCl0YPQu9GM0LYg0KXQpdCa!5e0!3m2!1smn!2smn!4v1663204537564!5m2!1smn!2smn" class="lightbox text-indigo-600 font-medium" data-type="iframe" data-group="iframe" data-width="1024px" data-height="576px">Google map дээр харах</a>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Footer Start -->
        @include('partials.footer')
        <!-- Footer End -->

        <!-- Start Cookie Popup -->
        <!-- <div class="cookie-popup fixed max-w-lg bottom-3 end-3 start-3 sm:start-0 mx-auto bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md py-5 px-6 z-50">
            <p class="text-slate-400">This website uses cookies to provide you with a great user experience. By using it, you accept our <a href="https://shreethemes.in" target="_blank" class="text-emerald-600 dark:text-emerald-500 font-semibold">use of cookies</a></p>
            <div class="cookie-popup-actions text-end">
                <button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 end-2"><i class="uil uil-times text-dark dark:text-slate-200 text-2xl"></i></button>
            </div>
        </div> -->
        <!--Note: Cookies Js including in plugins.init.js (path like; assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
        <!-- End Cookie Popup -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

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
        <script src="{{ asset('src/assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('src/assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('src/assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('src/assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('src/assets/js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>