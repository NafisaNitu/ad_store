@extends('frontend.layouts.master')

@section('content')
    <div class="under-header-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row position-relative
                ">
                        <div class="col-lg-2 col-md-2 col-sm-10 d-none d-lg-block p-0">
                            <div class="sidebar z-1020 cat-hover category-shadow-sm pt-0" style="background-color: #f5f7fa;">
                                <div class="pr-3 pl-3 pt-2 pb-1 d-none d-lg-block all-category position-relative text-left">
                                    <a href="https://sobkisubazar.com/categories" class="text-reset">
                                        <span class="fw-700 mr-3 sidebar-title">Category Filter</span>
                                    </a>
                                </div>


                                <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                    <div class="fs-14 fw-600 px-3">
                                        <a class="text-dark" href="#saleAd">Sale Ad</a>
                                    </div>
                                    <div class="px-5">
                                        <div class="aiz-checkbox-list">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="product" value="product">
                                                <span class="aiz-square-check"></span>
                                                <a href="#saleProduct"><span class="fs-13 fs-md-13">Product</span></a>
                                            </label>

                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="property" value="property">
                                                <span class="aiz-square-check"></span>
                                                <a href="#saleProperty"><span class="fs-13 fs-md-13">Property</span></a>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="service" value="service" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <a href="#saleService"><span class="fs-13 fs-md-13">Service</span></a>

                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                    <div class="fs-14 fw-600 px-3">
                                        <a class="text-dark" href="#buyAd">Buy Ad</a>
                                    </div>
                                    <div class="px-5">
                                        <div class="aiz-checkbox-list">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="Product" value="Product" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Product</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="Property" value="Property" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Property</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="Service" value="Service" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Service</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                    <div class="fs-14 fw-600 px-3">
                                        <a class="text-dark" href="#rentAd">Rent Ad</a>
                                    </div>
                                    <div class="px-5">
                                        <div class="aiz-checkbox-list">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="ForRent" value="ForRent" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">For Rent</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="ToRent" value="ToRent" onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">To Rent</span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="CorporateAds" value="CorporateAds"
                                                    onchange="filter()">
                                                <span class="aiz-square-check"></span>
                                                <span class="fs-13 fs-md-13">Corporate Ads</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                    <div class="fs-14 fw-600 px-3 pb-1">
                                        <a class="text-dark" href="#allOffer">All Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- all offer big banner from sob kisu baazar --}}
                        <div class="col-lg-10 col-md-10 col-sm-10 pr-0 pl-0">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        @foreach ($ad_stores_data as $item)
                                            <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                                                <div class="header-banner">
                                                    <a href="">
                                                        <img src="{{ $item['photo'] }}" alt=""
                                                            style="width:100%; height: 100%">
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach


                                        {{-- <div class="carousel-item">
                                            <a href="">
                                                <img src="{{ asset('frontend/assets/images/banner7.png') }}"
                                                    alt="" class="banner1">
                                            </a>

                                        </div> --}}

                                    </div>
                                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Banner -->

    <section id='allOffer' class="">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <h2 class="py-3 text-left w-700" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Offer
                    </h2>

                    <div id="secondCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div id="secondCarousel" class="carousel slide" data-ride="carousel">
                                @foreach ($data as $item)
                                    <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                                        <a href="">
                                            <img src="{{ $item['photo'] }}" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#secondCarousel" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#secondCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <div class="bbb_main_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                        <div class="bbb_viewed_slider_container">
                            <div class="owl-carousel owl-theme bbb_viewed_slider d-flex">
                                @foreach ($platinum_data as $item)
                                    <div class="owl-item">
                                        <div
                                            class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="bbb_viewed_image">
                                                <img src="{{ $item['photo'] }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                    <div class="bbb_main_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                        <div class="bbb_viewed_slider_container">
                            <div class="owl-carousel owl-theme bbb_viewed_slider_2 d-flex">
                                @foreach ($advertisement_data as $item)
                                    <div class="owl-item">
                                        <div
                                            class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="bbb_viewed_image-2">
                                                <img src="{{ $item['photo'] }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>0 1px 6px rgba(0,0,0,.3)


    <section id='saleAd' class="">
        <!-- <h2 class="py-3 text-center w-700 border-bottom border-top" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Sale Ad</h2> -->
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <h2 class="py-3 text-left w-700" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Sale
                        Ad</h2>
                    <div id="thirdCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div id="thirdCarousel" class="carousel slide" data-ride="carousel">
                                @foreach ($sales as $key => $sale)
                                    <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }} ">
                                        <a href="https://sobkisubazar.com/">
                                            <img src="{{ asset('images/sales/' . $sale->banner) }}"
                                                alt="{{ $sale->name ?? '' }}" class="banner1">
                                        </a>

                                    </div>
                                @endforeach
                                {{-- <div class="carousel-item active">
                                    <img src="{{ asset('frontend/assets/images/slider1.jpg') }}" alt=""
                                        class="banner1">
                                </div>

                                <div class="carousel-item">
                                    <a href="https://sobkisubazar.com/">
                                        <img src="{{ asset('frontend/assets/images/slider1.jpg') }}" alt=""
                                            class="banner1">
                                    </a>

                                </div>

                                <div class="carousel-item">
                                    <a href="https://sobkisubazar.com/">
                                        <img src="{{ asset('frontend/assets/images/slider1.jpg') }}" alt=""
                                            class="banner1">
                                    </a>

                                </div> --}}
                            </div>
                            <a class="carousel-control-prev" href="#thirdCarousel" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#thirdCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-4">
                <div class="row" id='saleProduct'>
                    <div class="col-lg-2"></div>

                    @foreach ($sales as $key => $sale)
                        @php
                            $key = $key + 1;
                        @endphp
                        @if ($key % 3 == 0)
                            <div class="col-lg-2"></div>
                        @endif
                        <div class="col-lg-5 col-sm-12">
                            <div class="content"><a href="#">
                                    <img src="{{ asset('images/sales/' . $sale->image) }}" alt="{{ $sale->name }}"
                                        class="saleimg">
                                </a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

            {{-- <div class="row" id='saleService'>
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s1.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s3.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
            </div> 
             <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s2.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s4.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row" id='saleProperty'>
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s1.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s3.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s2.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s4.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <a href="#" class="ml-auto btn btn-block bg-white p-3 fw-700 view-btn f-14"
                        style="font-family: 'Roboto', sans-serif;" id="loadMore"> Load More </a>
                </div>
            </div> --}}

        </div>
    </section>

    <!-- Buy Ads Section -->
    {{-- <section id='buyAd' class="">
        <!-- <h2 class="py-3 text-center w-700 border-bottom border-top" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Buy Ad</h2> -->
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <h2 class="py-3 text-left w-700" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Buy Ad
                    </h2>
                    <div id="myCarouselbuy" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div id="myCarouselbuy" class="carousel slide" data-ride="carousel">
                                <div class="carousel-item active">
                                    <img src="{{ asset('frontend/assets/images/bannar1.gif') }}" alt=""
                                        class="banner1">
                                </div>

                                <div class="carousel-item">
                                    <a href="https://sobkisubazar.com/">
                                        <img src="{{ asset('frontend/assets/images/banner7.png') }}" alt=""
                                            class="banner1">
                                    </a>

                                </div>

                                <div class="carousel-item">
                                    <a href="https://sobkisubazar.com/">
                                        <img src="{{ asset('frontend/assets/images/banner4.png') }}" alt=""
                                            class="banner1">
                                    </a>

                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarouselbuy" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarouselbuy" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-4">
                <div class="row" id='saleProduct'>
                    <div class="col-lg-2"></div>

                    @foreach ($buy_ads as $key => $buy_ad)
                        @php
                            $key = $key + 1;
                        @endphp
                        @if ($key % 3 == 0)
                            <div class="col-lg-2"></div>
                        @endif
                        <div class="col-lg-5 col-sm-12">
                            <div class="content"><a href="#">
                                    <img src="{{ asset('images/buy_ad/' . $buy_ad->image) }}" alt="{{ $buy_ad->name }}"
                                        class="saleimg">
                                </a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
          
        </div>
    </section> --}}

    <section id='buyAd' class="">
        <!-- <h2 class="py-3 text-center w-700 border-bottom border-top" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Sale Ad</h2> -->
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <h2 class="py-3 text-left w-700" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Buy
                        Ad</h2>
                    <div id="thirdCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div id="thirdCarousel" class="carousel slide" data-ride="carousel">
                                @foreach ($buy_ads as $key => $buy_ad)
                                <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }} ">
                                    <a href="https://sobkisubazar.com/">
                                        <img src="{{ asset('images/buy_ad/' . $buy_ad->banner) }}"
                                            alt="{{ $sale->name ?? '' }}" class="banner1">
                                    </a>

                                </div>
                                @endforeach


                                {{-- <div class="carousel-item">
                                    <a href="https://sobkisubazar.com/">
                                        <img src="{{ asset('frontend/assets/images/slider1.jpg') }}" alt=""
                                            class="banner1">
                                    </a>

                                </div>

                                <div class="carousel-item">
                                    <a href="https://sobkisubazar.com/">
                                        <img src="{{ asset('frontend/assets/images/slider1.jpg') }}" alt=""
                                            class="banner1">
                                    </a>

                                </div> --}}
                            </div>
                            <a class="carousel-control-prev" href="#thirdCarousel" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#thirdCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-2"></div>
                @foreach ($buy_ads as $key => $buy_ad)
                    @php
                        $key = $key + 1;
                    @endphp
                    @if ($key % 3 == 0)
                        <div class="col-lg-2"></div>
                    @endif
                    <div class="col-lg-5">
                        <div class="contentRent mt-4"><a href="#">
                                <img src="{{ asset('images/buy_ad/' . $buy_ad->image) }}"
                                    alt="{{ $buy_ad->name ?? '' }}" class="saleimg">
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>

            {{-- <div class="row" id='saleService'>
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s1.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s3.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
            </div> 
             <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s2.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s4.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row" id='saleProperty'>
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s1.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s3.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s2.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="content mt-4"><a href="#">
                            <img src="{{ asset('frontend/assets/images/s4.jpg') }}" alt="" class="saleimg">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <a href="#" class="ml-auto btn btn-block bg-white p-3 fw-700 view-btn f-14"
                        style="font-family: 'Roboto', sans-serif;" id="loadMore"> Load More </a>
                </div>
            </div> --}}

        </div>
    </section>
    <!-- Rent Ads Section -->
    <section id='rentAd' class="">
        <!-- <h2 class="py-3 text-center w-700 border-bottom border-top" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Rent Ad</h2> -->
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <h2 class="py-3 text-left w-700" style="font-size:24px; font-family: 'Roboto', sans-serif;">All Rent
                        Ad</h2>
                    <div id="myCarouselRent" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div id="myCarouselRent" class="carousel slide" data-ride="carousel">
                                @foreach ($rent_ads as $key => $rent_ad)
                                <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }} ">
                                    <a href="https://sobkisubazar.com/">
                                        <img src="{{ asset('images/rent_ad/' . $rent_ad->banner) }}"
                                            alt="{{ $rent_ad->name ?? '' }}" class="banner1">
                                    </a>

                                </div>
                                @endforeach
                                {{-- <div class="carousel-item active">
                                    <img src="{{ asset('frontend/assets/images/banner6.jpg') }}" alt=""
                                        class="banner1">
                                </div>

                                <div class="carousel-item">
                                    <a href="https://sobkisubazar.com/">
                                        <img src="{{ asset('frontend/assets/images/banner8.png') }}" alt=""
                                            class="banner1">
                                    </a>

                                </div>

                                <div class="carousel-item">
                                    <a href="https://sobkisubazar.com/">
                                        <img src="{{ asset('frontend/assets/images/banner3.png') }}" alt=""
                                            class="banner1">
                                    </a>

                                </div> --}}
                            </div>
                            <a class="carousel-control-prev" href="#myCarouselRent" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarouselRent" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-2"></div>
                @foreach ($rent_ads as $key => $rent_ad)
                    @php
                        $key = $key + 1;
                    @endphp
                    @if ($key % 3 == 0)
                        <div class="col-lg-2"></div>
                    @endif
                    <div class="col-lg-5">
                        <div class="contentRent mt-4"><a href="#">
                                <img src="{{ asset('images/rent_ad/' . $rent_ad->image) }}" alt="{{ $rent_ad->name }}"
                                    class="saleimg">
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>


        </div>
    </section>

    <!-- Footer -->




    </div>
@endsection
