@extends('layouts.master')
@section('title')
{{ $company->name_mn }}
@endsection
@section('content')
<section class="relative table w-full py-72 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ Storage::url($company->logo_en) }}') !important;">
    <div class="absolute inset-0 bg-black opacity-80"></div>
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-5">
                <div class="lg:-mt-[330px] -mt-[299px]">
                    <div class="rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800">
                        <div class="text-center py-8 p-6 border-b border-gray-100 dark:border-gray-700">
                            <img src="{{ Storage::url($company->logo_mn) }}" class="h-24 w-24 p-4 mx-auto block" alt="">
                            <h5 class="mt-5 text-xl font-semibold mb-0">{{ $company->name_mn }}</h5>
                            <p class="text-slate-400 mb-0">{{ $company->direction_mn }}</p>
                        </div>

                        <div class="p-6">
                            <h5 class="font-semibold">Компанийн мэдээлэл :</h5>
                            <ul class="list-none mt-4">
                                @php $output = substr($company->phone, 0, 4) . "-" . substr($company->phone, -4); @endphp
                                <li class="flex mt-2 items-center font-medium"><i data-feather="phone" class="h-4 w-4 text-amber-500 me-3"></i><span class="text-slate-400 me-3">Утас :</span> {{ $output }}</li>
                                <li class="flex mt-2 items-center font-medium"><i data-feather="mail" class="h-4 w-4 text-amber-500 me-3"></i><span class="text-slate-400 me-3">Э-мэйл :</span> <a href="mailto:info@ashiddari.mn">{{ $company->email }}</a></li>
                                <li class="flex mt-2 items-center font-medium"><i data-feather="link" class="h-4 w-4 text-amber-500 me-3"></i><span class="text-slate-400 me-3">Вебсайт :</span> <a href="#" target="_blank">#</a></li>
                                <li class="flex mt-2 items-center font-medium"><i data-feather="users" class="h-4 w-4 text-amber-500 me-3"></i><span class="text-slate-400 me-3">Ажилчдын тоо :</span> {{ $company->company_size }}</li>
                            </ul>

                            <!-- <a href="#" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md mt-6">Нээлттэй ажлын байр</a> -->
                        </div>
                    </div>

                    <div class="w-full leading-[0] border-0 mt-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.0106711353956!2d106.9424363155851!3d47.91683097920643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d969223ede752a1%3A0x65a94722bbb24c2!2z0JHQsNGP0YHQsNGFINCl0YPQu9GM0LYg0KXQpdCa!5e0!3m2!1smn!2smn!4v1663204537564!5m2!1smn!2smn" style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-7">
                <h4 class="text-xl font-semibold">Бидний тухай</h4>
                <p class="mt-4">{{ $company->intro_mn }}</p>
                
                @php $brands = App\Models\BrandSub::select('id','name','logo','brand_id')->where('company_id',$company->id)->where('not_brand','0')->get() @endphp
                <h4 class="mt-8 text-xl font-semibold">Брэнд</h4>
                
                <div class="grid lg:grid-cols-4 grid-cols-1 mt-8 gap-[30px]">
                    @php $brands = App\Models\BrandSub::select('id','name','logo','brand_id')->where('company_id',$company->id)->where('not_brand','0')->get() @endphp
                    @foreach($brands as $brand)
                    <a href="/brands/{{ $brand->brand_id }}/{{ $brand->id }}" class="group bg-white dark:bg-slate-900 p-6 rounded shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 border-4 border-white dark:border-slate-900 hover:border-b-indigo-600 dark:hover:border-b-indigo-600 text-center duration-500 ease-in-out">
                        <img src="{{ Storage::url($brand->logo) }}" class="h-16 w-16 mx-auto p-3 rounded-full bg-gray-50 dark:bg-slate-800 shadow-md dark:shadow-gray-800" alt="">

                        <div class="content mt-3">
                            <span class="text-lg font-semibold group-hover:text-indigo-600 duration-500 block">{{ $brand->name }}</span>

                            <span class="text-base text-slate-400 block"><i class="uil uil-facebook text-indigo-600 me-1"></i> Facebook</span>
                        </div>
                    </a>
                    @endforeach
                </div>
                        
                <!-- <a href="#" class="relative inline-block font-semibold tracking-wide align-middle ease-in-out text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 mt-6">Бусад ажлын байр <i class="uil uil-angle-right-b align-middle"></i></a> -->
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <!-- <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="lg:col-span-5 md:col-span-6">
                <img src="assets/images/illustrator/envelope.svg" class="mx-auto d-block" alt="">
            </div>

            <div class="lg:col-span-7 md:col-span-6">
                <span class="bg-blue-600/5 text-blue-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile Apps</span>
                <h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4">Available for your <br> Smartphones</h4>
                <p class="text-slate-400 max-w-xl mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                <div class="my-5">
                    <a href="#"><img src="assets/images/app/app.png" class="m-1 inline-block" alt=""></a>

                    <a href="#"><img src="assets/images/app/playstore.png" class="m-1 inline-block" alt=""></a>
                </div>

                <div class="inline-block">
                    <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-700">
                        <i data-feather="smartphone" class="me-2 text-blue-600 h-10 w-10"></i>
                        <div class="content">
                            <h6 class="mb-0 text-base font-medium">Install app now on your cellphones</h6>
                            <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn More <i class="uil uil-angle-right-b"></i></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</section>
@endsection