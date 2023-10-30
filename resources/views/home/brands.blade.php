@extends('layouts.master')
@section('title')
@lang('nav_Brands')
@endsection
@section('styles')

@endsection
@section('content')
    <div class="page-title-section" style="background-image: url('{{ asset('src/img/content/brands.jpg') }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>{{ Str::upper(__('nav_Brands')) }}</h1>
        </div>
    </div>
    <div id="portfolio" class="section-wrapper pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-3">
                    <ul class="nav justify-content-center" role="tablist" id="customersCats">
                        <li class="nav-item">
                            <a class="nav-link port-link active" href="#all" id="all-itme" data-toggle="tab" role="tab"
                                aria-controls="all" aria-selected="true">@lang("n_brands_All")</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link port-link" href="#khulij" id="khulij-itme" data-toggle="tab" role="tab"
                                aria-controls="khulij" aria-selected="false">@lang('n_brands_Khulij')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link port-link" href="#ashiddari" id="ashiddari-itme" data-toggle="tab" role="tab"
                                aria-controls="ashiddari" aria-selected="false">@lang('n_brands_Ashiddari')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link port-link" href="#khulijgoo" id="khulijgoo-itme" data-toggle="tab" role="tab"
                                aria-controls="khulijgoo" aria-selected="false">@lang('n_brands_KhulijGoo')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row tabs-boxs">
            <div class="col-sm-12">
                <div class="tab-content mt-5">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-itme">
                        <div class="row">
                            @php $brands = App\Models\Brand::All() @endphp
                            @foreach($brands as $brand)
                            <div class="col-sm-6 col-md-6 col-lg-4 port-ite"
                                    style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
                                <div class="overlay-portfolio">
                                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a><br>
                                    <p style="color:white; text-align: center;">{{ Str::limit(strip_tags($brand->{'intro_'.app()->getLocale()}), 80) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="khulij" role="tabpanel" aria-labelledby="khulij-itme">
                        <div class="row">
                            @php $brand_khulij = App\Models\Brand::inRandomOrder()->select('id','name','intro_en','intro_ru','intro_mn','slider_image')->where('company_id','1')->get() @endphp
                            @foreach($brand_khulij as $brand)
                            <div class="col-sm-6 col-md-6 col-lg-4 port-ite"
                                    style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
                                <div class="overlay-portfolio">
                                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a><br>
                                    <p style="color:white; text-align: center;">{{ Str::limit(strip_tags($brand->{'intro_'.app()->getLocale()}), 80) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ashiddari" role="tabpanel" aria-labelledby="ashiddari-itme">
                        <div class="row">
                            @php $brand_ashiddari = App\Models\Brand::inRandomOrder()->select('id','name','intro_en','intro_ru','intro_mn','slider_image')->where('company_id','2')->limit(3)->get() @endphp
                            @foreach($brand_ashiddari as $brand)
                            <div class="col-sm-6 col-md-6 col-lg-4 port-ite"
                                    style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
                                <div class="overlay-portfolio">
                                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a><br>
                                    <p style="color:white; text-align: center;">{{ Str::limit(strip_tags($brand->{'intro_'.app()->getLocale()}), 80) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="khulijgoo" role="tabpanel" aria-labelledby="khulijgoo-itme">
                        <div class="row">
                            @php $brand_goo = App\Models\Brand::inRandomOrder()->select('id','name','intro_en','intro_ru','intro_mn','slider_image')->where('company_id','3')->limit(3)->get() @endphp
                            @foreach($brand_goo as $brand)
                            <div class="col-sm-6 col-md-6 col-lg-4 port-ite"
                                    style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
                                <div class="overlay-portfolio">
                                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a><br>
                                    <p style="color:white; text-align: center;">{{ Str::limit(strip_tags($brand->{'intro_'.app()->getLocale()}), 80) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 mb-4">
                    <h3 class="s-subtitle-top textcolor text-center">{{ Str::upper(__('nav_Brands')) }}</h3>
                </div>
            </div>
            <ul class="row portfolio list-unstyled mb-0 boxed-portfolio">
                @foreach($brands as $brand)
                <li class="col-md-6 col-lg-4 project" data-groups="[&quot;skill1&quot;]">
                    <div class="card mb-0">
                        <div class="project m-0">
                            <figure class="portfolio-item">
                                <a href="/brands/{{ $brand->id }}" class="hovereffect">
                                    <img class="img-responsive mx-auto d-block" src="{{ Storage::url($brand->logo) }}" alt="" style="height: 110px">
                                    <div class="overlay">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="card-body">
                            <a href="/brands/{{ $brand->id }}" class="card-title title-link fs-16 fw-bold">{{ $brand->name }}</a>
                            <p class="card-text mt-55 mb-50 fs-14" style="font-family: 'Barlow', sans-serif !important; font-weight: 300; font-size: 1rem; color: #686c6d; letter-spacing: 0.03rem; margin-bottom: 10px;"><b>Start:</b> {{ $brand->start_year }}</p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection