@extends('frontend.layouts.app')


@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- metas -->
    <meta charset="utf-8" />
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="keywords" content="ICS Kimya"/>
    <meta name="description" content="ICS Kimya"/>

    <!-- title  -->
    <title>ICS Kimya</title>


    @include('frontend.includes.head-links')


</head>

<body>

<!-- PAGE LOADING
================================================== -->
<div id="preloader"></div>

<!-- MAIN WRAPPER
================================================== -->
<div class="main-wrapper">

    @include('frontend.includes.header-light')


    <!-- PAGE TITLE
    ================================================== -->
    <section class="page-title-section bg-img cover-background dark-overlay" data-overlay-dark="7" data-background="{{asset('frontend/img/bg/bg-06.png')}}">
        <div class="container">
            <div class="d-md-flex justify-content-between">
                <div class="flex-shrink-0">
                    <h1>Services</h1>
                </div>
                <div class="flex-grow-1">
                    <ul class="text-center text-md-end ps-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.html#!">Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICE STYLE 2
    ================================================== -->
    <section class="service-02">
        <div class="container">
            <div class="heading-one text-center mb-1-9">
                <span><i></i>Our Services</span>
                <h2 class="w-md-60 mx-auto">Explore Our Services</h2>
            </div>
            <div class="pb-5">
                <div class="row mt-n10">

                    @foreach($services as $service)
                        <div class="col-md-6 col-xl-4 mt-10">
                            <div class="card card-style4 border-0 rounded-0">
                                <div class="service-img inner-img position-relative overflow-hidden">
                                    <img src="{{$service->image}}" alt="..." class="border-radius-5">
                                </div>
                                <div class="card-body border-radius-5">
                                    <h3><a href="{{route('frontend.service-detail', $service->id)}}">{{$service->title}}</a></h3>
                                    <div class="service-content">
                                        <p class="mb-0 w-lg-80 mx-auto">{{Str::limit($service->description,50)}}.</p>
                                    </div>
                                    <div class="service-btn">
                                        <a href="{{route('frontend.service-detail', $service->id)}}">Read More<i class="fa-solid fa-arrow-right ps-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <section class="p-lg-0">
        <div class="container">
            <div class="bg-img cover-background py-lg-10" data-background="img/content/map-bg.jpg">
                <div class="heading-one text-center mb-1-9">
                    <span><i></i>Testimonials</span>
                    <h2 class="w-md-60 mx-auto">What Clients Say About Us!</h2>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <div class="testimonial-wrapper pt-5 pb-3 px-4 p-lg-7 position-relative">
                        <div class="testimony-wrap">
                            <div class="align-items-end align-items-sm-center mb-4 justify-content-between d-flex">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="frontend/img/avatar/avatar-01.jpg" class="rounded-circle" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ps-3 ps-xl-4">
                                        <h3 class="font-weight-500 h5 mb-1">Adiam Girma</h3>
                                        <span class="small">Researcher</span>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-quote-right display-25 display-sm-20 text-secondary"></i>
                                </div>
                            </div>
                            <p class="mb-0 display-28 lh-lg">Man, this issue is getting higher and higher as i research greater approximately it. I are becoming as a minimum 50 instances the fee from laboratory. We've visible awesome effects already.</p>
                        </div>
                    </div>
                    <div class="testimonial-wrapper pt-5 pb-3 px-4 p-lg-7 position-relative">
                        <div class="testimony-wrap">
                            <div class="align-items-end align-items-sm-center mb-4 justify-content-between d-flex">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="frontend/img/avatar/avatar-02.jpg" class="rounded-circle" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ps-3 ps-xl-4">
                                        <h3 class="font-weight-500 h5 mb-1">Futsum Yusef</h3>
                                        <span class="small">Psychologist</span>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-quote-right display-25 display-sm-20 text-secondary"></i>
                                </div>
                            </div>
                            <p class="mb-0 display-28 lh-lg">No depend in which you go, laboratory is the coolest, maximum occurring aspect around! It's all good. Definitely really well worth the investment. You've stored our business!</p>
                        </div>
                    </div>
                    <div class="testimonial-wrapper pt-5 pb-3 px-4 p-lg-7 position-relative">
                        <div class="testimony-wrap">
                            <div class="align-items-end align-items-sm-center mb-4 justify-content-between d-flex">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="frontend/img/avatar/avatar-03.jpg" class="rounded-circle" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ps-3 ps-xl-4">
                                        <h3 class="font-weight-500 h5 mb-1">Fiyori Aman</h3>
                                        <span class="small">Doctor</span>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-quote-right display-25 display-sm-20 text-secondary"></i>
                                </div>
                            </div>
                            <p class="mb-0 display-28 lh-lg">Laboratory stored my business. Laboratory is really well worth tons greater than i paid. Laboratory is awesome. The service was excellent. I am virtually happy with my laboratory.</p>
                        </div>
                    </div>
                    <div class="testimonial-wrapper pt-5 pb-3 px-4 p-lg-7 position-relative">
                        <div class="testimony-wrap">
                            <div class="align-items-end align-items-sm-center mb-4 justify-content-between d-flex">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="frontend/img/avatar/avatar-04.jpg" class="rounded-circle" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ps-3 ps-xl-4">
                                        <h3 class="font-weight-500 h5 mb-1">Gabriel Osman</h3>
                                        <span class="small">Scientist</span>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-quote-right display-25 display-sm-20 text-secondary"></i>
                                </div>
                            </div>
                            <p class="mb-0 display-28 lh-lg">No rely in which you go, laboratory is the coolest, maximum going on element around! The great at the net! I can not say sufficient approximately laboratory. It's precisely what i've been searching for.</p>
                        </div>
                    </div>
                    <div class="testimonial-wrapper pt-5 pb-3 px-4 p-lg-7 position-relative">
                        <div class="testimony-wrap">
                            <div class="align-items-end align-items-sm-center mb-4 justify-content-between d-flex">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="frontend/img/avatar/avatar-05.jpg" class="rounded-circle" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ps-3 ps-xl-4">
                                        <h3 class="font-weight-500 h5 mb-1">Hana Dawit</h3>
                                        <span class="small">Customer</span>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-quote-right display-25 display-sm-20 text-secondary"></i>
                                </div>
                            </div>
                            <p class="mb-0 display-28 lh-lg">Laboratory has absolutely passed our expectations. Laboratory is really well worth a good deal extra than i paid. Needless to mention we're extraordinarily happy with the results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COUNT
    ================================================== -->
    <section class="bg-secondary count-01 position-relative">
        <div class="container">
            <div class="row position-relative z-index-9 mt-n1-9">
                <div class="col-sm-6 col-xl-3 mt-1-9">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="frontend/img/icons/icon-08.png" alt="...">
                        </div>
                        <div class="flex-grow-1 ps-4">
                            <h3 class="h2 text-white"><span class="countup">85</span>+</h3>
                            <h5 class="text-white mb-0">Qualified Scientist</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 mt-1-9">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="frontend/img/icons/icon-09.png" alt="...">
                        </div>
                        <div class="flex-grow-1 ps-4">
                            <h3 class="h2 text-white"><span class="countup">5270</span>+</h3>
                            <h5 class="text-white mb-0">Happy Clients</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 mt-1-9">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="frontend/img/icons/icon-10.png" alt="...">
                        </div>
                        <div class="flex-grow-1 ps-4">
                            <h3 class="h2 text-white"><span class="countup">30</span>+</h3>
                            <h5 class="text-white mb-0">Years Experience</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 mt-1-9">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="frontend/img/icons/icon-11.png" alt="...">
                        </div>
                        <div class="flex-grow-1 ps-4">
                            <h3 class="h2 text-white"><span class="countup">95</span>%</h3>
                            <h5 class="text-white mb-0">Pathology Services</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
