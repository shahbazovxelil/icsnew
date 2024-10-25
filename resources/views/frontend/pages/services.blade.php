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
    <meta name="keywords" content="Laboratory and Research Template" />
    <meta name="description" content="Biology - Laboratory and Research Template" />

    <!-- title  -->
    <title>Biology - Laboratory and Research Template</title>

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
                    <div class="col-md-6 col-xl-4 mt-10">
                        <div class="card card-style4 border-0 rounded-0">
                            <div class="service-img inner-img position-relative overflow-hidden">
                                <img src="frontend/img/services/service-01.jpg" alt="..." class="border-radius-5">
                            </div>
                            <div class="card-body border-radius-5">
                                <h3><a href="chemical-research.html">Chemical Research</a></h3>
                                <div class="service-content">
                                    <p class="mb-0 w-lg-80 mx-auto">We provide you with objective information so that you can map your route to fitness and wellness....</p>
                                </div>
                                <div class="service-btn">
                                    <a href="chemical-research.html">Read More<i class="fa-solid fa-arrow-right ps-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-10">
                        <div class="card card-style4 border-0 rounded-0">
                            <div class="service-img inner-img position-relative overflow-hidden">
                                <img src="frontend/img/services/service-02.jpg" alt="..." class="border-radius-5">
                            </div>
                            <div class="card-body border-radius-5">
                                <h3><a href="genetics-tests.html">Genetics Tests</a></h3>
                                <div class="service-content">
                                    <p class="mb-0 w-lg-80 mx-auto">We provide you with objective information so that you can map your route to fitness and wellness....</p>
                                </div>
                                <div class="service-btn">
                                    <a href="genetics-tests.html">Read More<i class="fa-solid fa-arrow-right ps-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-10">
                        <div class="card card-style4 border-0 rounded-0">
                            <div class="service-img inner-img position-relative overflow-hidden">
                                <img src="frontend/img/services/service-03.jpg" alt="..." class="border-radius-5">
                            </div>
                            <div class="card-body border-radius-5">
                                <h3><a href="pathologycam-testing.html">Pathologycam Testing</a></h3>
                                <div class="service-content">
                                    <p class="mb-0 w-lg-80 mx-auto">We provide you with objective information so that you can map your route to fitness and wellness....</p>
                                </div>
                                <div class="service-btn">
                                    <a href="pathologycam-testing.html">Read More<i class="fa-solid fa-arrow-right ps-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-10">
                        <div class="card card-style4 border-0 rounded-0">
                            <div class="service-img inner-img position-relative overflow-hidden">
                                <img src="frontend/img/services/service-04.jpg" alt="..." class="border-radius-5">
                            </div>
                            <div class="card-body border-radius-5">
                                <h3><a href="endocrinology-research.html">Endocrinology Research</a></h3>
                                <div class="service-content">
                                    <p class="mb-0 w-lg-80 mx-auto">We provide you with objective information so that you can map your route to fitness and wellness....</p>
                                </div>
                                <div class="service-btn">
                                    <a href="endocrinology-research.html">Read More<i class="fa-solid fa-arrow-right ps-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-10">
                        <div class="card card-style4 border-0 rounded-0">
                            <div class="service-img inner-img position-relative overflow-hidden">
                                <img src="frontend/img/services/service-05.jpg" alt="..." class="border-radius-5">
                            </div>
                            <div class="card-body border-radius-5">
                                <h3><a href="biologics-testing.html">Biologics Testing</a></h3>
                                <div class="service-content">
                                    <p class="mb-0 w-lg-80 mx-auto">We provide you with objective information so that you can map your route to fitness and wellness....</p>
                                </div>
                                <div class="service-btn">
                                    <a href="biologics-testing.html">Read More<i class="fa-solid fa-arrow-right ps-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-10">
                        <div class="card card-style4 border-0 rounded-0">
                            <div class="service-img inner-img position-relative overflow-hidden">
                                <img src="frontend/img/services/service-06.jpg" alt="..." class="border-radius-5">
                            </div>
                            <div class="card-body border-radius-5">
                                <h3><a href="naturopathic-tests.html">Naturopathic Tests</a></h3>
                                <div class="service-content">
                                    <p class="mb-0 w-lg-80 mx-auto">We provide you with objective information so that you can map your route to fitness and wellness....</p>
                                </div>
                                <div class="service-btn">
                                    <a href="naturopathic-tests.html">Read More<i class="fa-solid fa-arrow-right ps-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US
    ================================================== -->
    <section class="whychoose-01 pt-0">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-4 col-xxl-6">
                    <div class="position-relative bg-img cover-background h-100" data-background="img/content/why-choose-04.jpg">
                        <div class="position-absolute bottom-0 start-0 bg-secondary p-5">
                            <div class="d-flex align-items-center">
                                <div class="story-video">
                                    <a class="video video_btn" href="https://www.youtube.com/watch?v=gi3DeFY0cfw">
                                        <i class="fa fa-play display-30"></i>
                                    </a>
                                </div>
                                <div class="ps-5">
                                    <h6 class="mb-0 text-white">Watch The <br> Video</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-6">
                    <div class="whychoose-right position-relative">
                        <div class="heading-one white mb-1-9 mb-md-7 position-relative z-index-9">
                            <span><i></i>Why Choose Us</span>
                            <h2 class="w-md-80 text-white">Testing by Our Expert Lab Scientists</h2>
                        </div>
                        <div class="horizontaltab tab-style1 position-relative z-index-9">
                            <ul class="resp-tabs-list hor_1">
                                <li>Why Choose Us</li>
                                <li>Our Vision</li>
                                <li>Our Mission</li>
                            </ul>
                            <div class="resp-tabs-container hor_1 p-0">
                                <div>
                                    <div class="row align-items-center mt-n4">
                                        <div class="col-md-4 mt-4">
                                            <div>
                                                <img src="frontend/img/content/why-choose-05.jpg" alt="..." class="border-radius-10">
                                            </div>
                                        </div>
                                        <div class="col-md-8 mt-4">
                                            <div>
                                                <p>We provide you with objective information so that you can map your route to fitness and wellness.</p>
                                                <div class="row mt-n3">
                                                    <div class="col-sm-6 mt-3">
                                                        <div class="d-flex">
                                                            <div class="pt-1">
                                                                <img src="frontend/img/icons/icon-06.png" alt="...">
                                                            </div>
                                                            <div class="ps-3">
                                                                <h3 class="display-27 text-secondary mb-2">Helpful Test Tips</h3>
                                                                <p class="mb-0">Regulatory surroundings can assist aid sponsors.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mt-3">
                                                        <div class="d-flex">
                                                            <div class="pt-1">
                                                                <img src="frontend/img/icons/icon-07.png" alt="...">
                                                            </div>
                                                            <div class="ps-3">
                                                                <h3 class="display-27 text-secondary mb-2">Patient Centered Care</h3>
                                                                <p class="mb-0">Regulatory surroundings can assist aid sponsors.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row align-items-center mt-n4">
                                        <div class="col-md-8 mt-4 order-2 order-md-1">
                                            <div>
                                                <p>One of the important functions of the science laboratory is the deepening of the scholars know-how that medical principles and alertness are carefully associated with their personal natural environment.</p>
                                                <p class="mb-0">We provide you with objective information so that you can map your route to fitness and wellness.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-4 order-1 order-md-2">
                                            <div>
                                                <img src="frontend/img/content/why-choose-03.jpg" alt="..." class="border-radius-5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row align-items-center mt-n4">
                                        <div class="col-md-4 mt-4">
                                            <div>
                                                <img src="frontend/img/content/why-choose-02.jpg" alt="..." class="border-radius-5">
                                            </div>
                                        </div>
                                        <div class="col-md-8 mt-4">
                                            <div>
                                                <p>We provide you with objective information so that you can map your route to fitness and wellness.</p>
                                                <div class="lab-progress">
                                                    <div class="progress-text">
                                                        <div class="row mb-2">
                                                            <div class="col-6">Endocrinology Research</div>
                                                            <div class="col-6 text-end">80%</div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-progress progress rounded-0 mb-3">
                                                        <div class="animated custom-bar progress-bar slideInLeft bg-primary" style="width:80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                    </div>
                                                    <div class="progress-text">
                                                        <div class="row mb-2">
                                                            <div class="col-6">Chemical Research</div>
                                                            <div class="col-6 text-end">95%</div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-progress progress rounded-0">
                                                        <div class="animated custom-bar progress-bar slideInLeft bg-primary" style="width:95%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM
    ================================================== -->
    <section class="p-0">
        <div class="container">
            <div class="heading-one text-center mb-1-9">
                <span><i></i>Our Team</span>
                <h2 class="w-md-60 mx-auto">Meet Our Experts</h2>
            </div>
            <div class="row g-5 mt-n4">
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card card-style2 border-0">
                        <img src="frontend/img/team/team-01.jpg" alt="..." class="border-radius-10">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="h5 text-secondary mb-1"><a href="team-details.html">Faruz Nuguse</a></h3>
                                <span class="display-30">Pathology Special</span>
                            </div>
                            <div class="social-link text-end">
                                <span><i class="fa-solid fa-share-nodes"></i></span>
                                <ul class="social-icon">
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card card-style2 border-0">
                        <img src="frontend/img/team/team-02.jpg" alt="..." class="border-radius-10">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="h5 text-secondary mb-1"><a href="team-details.html">Idris Luwam</a></h3>
                                <span class="display-30">Research Expert</span>
                            </div>
                            <div class="social-link text-end">
                                <span><i class="fa-solid fa-share-nodes"></i></span>
                                <ul class="social-icon">
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card card-style2 border-0">
                        <img src="frontend/img/team/team-03.jpg" alt="..." class="border-radius-10">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="h5 text-secondary mb-1"><a href="team-details.html">Selam Bisrat</a></h3>
                                <span class="display-30">Lab Head</span>
                            </div>
                            <div class="social-link text-end">
                                <span><i class="fa-solid fa-share-nodes"></i></span>
                                <ul class="social-icon">
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html#!">
                                            <i class="ti-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS
    ================================================== -->
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
