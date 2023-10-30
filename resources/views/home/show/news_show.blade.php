@extends('layouts.master')
@section('title')
{{ $post->{'title_'.app()->getLocale()} }}
@endsection
@section('content')
<section class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/blog/bg.jpg')] bg-center bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-black opacity-80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 text-3xl leading-normal font-medium text-white">{{ $post->title_mn }}</h3>

            <ul class="list-none mt-6">
                <li class="inline-block font-semibold text-white/50 mx-5"> <span class="text-white block">Бичсэн :</span> <span class="block">Админ</span></li>
                <li class="inline-block font-semibold text-white/50 mx-5"> <span class="text-white block">Хэзээ :</span> <span class="block">{{ $post->created_at->format('Y.m.d') }}</span></li>
                <li class="inline-block font-semibold text-white/50 mx-5"> <span class="text-white block">Time :</span> <span class="block">8 Min Read</span></li>
            </ul>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Нүүр</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Мэдээ</li>
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
            <div class="lg:col-span-8 md:col-span-6">
                <div class="p-6 rounded-md shadow dark:shadow-gray-800">

                    <img src="{{ Storage::url($post->image) }}" class="rounded-md" alt="">

                    <div class="mt-6">
                        <p>{{ $post->full_text_mn }}</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Бусад мэдээ</h5>
                    @php $recentnews = App\Models\Post::select('id','title_mn','image','created_at')->wherenot('id',$post->id)->get() @endphp
                    @foreach($recentnews as $news)
                    <div class="flex items-center mt-8">
                        <img src="{{ Storage::url($news->image) }}" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                        <div class="ms-3">
                            <a href="/news/{{ $news->id }}" class="font-semibold hover:text-indigo-600">{{ Str::limit($news->title_mn, 46) }}</a>
                            <p class="text-sm text-slate-400">{{ $news->created_at->format('Y.m.d') }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>
@endsection