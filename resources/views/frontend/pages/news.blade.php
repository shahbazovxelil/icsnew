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

    <!-- HEADER
    ================================================== -->
    @include('frontend.includes.header-light')
    <!-- PAGE TITLE
    ================================================== -->
    <section class="page-title-section bg-img cover-background dark-overlay" data-overlay-dark="7" data-background="{{asset('frontend/img/bg/bg-06.png')}}">
        <div class="container">
            <div class="d-md-flex justify-content-between">
                <div class="flex-shrink-0">
                    <h1>Blog List</h1>
                </div>
                <div class="flex-grow-1">
                    <ul class="text-center text-md-end ps-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog-list.html#!">Blog List</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--  BLOG LIST
    ================================================== -->
    <section>
        <div class="container">
            <div class="row mt-n5">
                <div class="col-lg-8 mt-5">
                    <article class="card card-style5 border-0 shadow border-radius-5 mt-5 mb-12">
                        <div class="card-body">
                            <img src="frontend/img//blog/blog-list-01.jpg" alt="..." class="mb-4 border-radius-5">
                            <div class="px-xxl-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="d-inline-block me-4 display-30"><i class="ti-calendar text-secondary display-30 pe-3"></i>25 Aug</li>
                                    <li class="d-inline-block"><i class="ti-comments text-secondary display-30 pe-3"></i>3 Comments</li>
                                </ul>
                                <h3><a href="{{route('frontend.news-detail')}}">Equipping researchers in the developing world</a></h3>
                                <p class="mb-3">We provide you with objective information so that you can map your route to fitness and wellness. Regulatory surroundings can assist aid sponsors.</p>
                                <a href="{{route('frontend.news-detail')}}" class="text-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                    <article class="card card-style5 border-0 shadow border-radius-5 mt-5 mb-12">
                        <div class="card-body">
                            <img src="frontend/img//blog/blog-list-02.jpg" alt="..." class="mb-4 border-radius-5">
                            <div class="px-xxl-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="d-inline-block me-4 display-30"><i class="ti-calendar text-secondary display-30 pe-3"></i>24 Aug</li>
                                    <li class="d-inline-block"><i class="ti-comments text-secondary display-30 pe-3"></i>1 Comments</li>
                                </ul>
                                <h3><a href="{{route('frontend.news-detail')}}">Identifying bases of disease pathophysio</a></h3>
                                <p class="mb-3">We provide you with objective information so that you can map your route to fitness and wellness. Regulatory surroundings can assist aid sponsors.</p>
                                <a href="{{route('frontend.news-detail')}}" class="text-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                    <article class="card card-style5 border-0 shadow border-radius-5 mt-5 mb-12">
                        <div class="card-body">
                            <img src="frontend/img//blog/blog-list-03.jpg" alt="..." class="mb-4 border-radius-5">
                            <div class="px-xxl-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="d-inline-block me-4 display-30"><i class="ti-calendar text-secondary display-30 pe-3"></i>21 Aug</li>
                                    <li class="d-inline-block"><i class="ti-comments text-secondary display-30 pe-3"></i>5 Comments</li>
                                </ul>
                                <h3><a href="{{route('frontend.news-detail')}}">Express scripts throw lifeline digital health</a></h3>
                                <p class="mb-3">We provide you with objective information so that you can map your route to fitness and wellness. Regulatory surroundings can assist aid sponsors.</p>
                                <a href="{{route('frontend.news-detail')}}" class="text-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                    <article class="card card-style5 border-0 shadow border-radius-5 mt-5 mb-12">
                        <div class="card-body">
                            <img src="frontend/img//blog/blog-list-04.jpg" alt="..." class="mb-4 border-radius-5">
                            <div class="px-xxl-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="d-inline-block me-4 display-30"><i class="ti-calendar text-secondary display-30 pe-3"></i>19 Aug</li>
                                    <li class="d-inline-block"><i class="ti-comments text-secondary display-30 pe-3"></i>7 Comments</li>
                                </ul>
                                <h3><a href="{{route('frontend.news-detail')}}">10 Best Mobile Apps for Scientific Research</a></h3>
                                <p class="mb-3">We provide you with objective information so that you can map your route to fitness and wellness. Regulatory surroundings can assist aid sponsors.</p>
                                <a href="{{route('frontend.news-detail')}}" class="text-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                    <article class="card card-style5 border-0 shadow border-radius-5 mt-5 mb-12">
                        <div class="card-body">
                            <img src="frontend/img//blog/blog-list-05.jpg" alt="..." class="mb-4 border-radius-5">
                            <div class="px-xxl-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="d-inline-block me-4 display-30"><i class="ti-calendar text-secondary display-30 pe-3"></i>17 Aug</li>
                                    <li class="d-inline-block"><i class="ti-comments text-secondary display-30 pe-3"></i>5 Comments</li>
                                </ul>
                                <h3><a href="{{route('frontend.news-detail')}}">Some of the social determinants of health</a></h3>
                                <p class="mb-3">We provide you with objective information so that you can map your route to fitness and wellness. Regulatory surroundings can assist aid sponsors.</p>
                                <a href="{{route('frontend.news-detail')}}" class="text-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                    <article class="card card-style5 border-0 shadow border-radius-5 mt-5 mb-8">
                        <div class="card-body">
                            <img src="frontend/img//blog/blog-list-06.jpg" alt="..." class="mb-4 border-radius-5">
                            <div class="px-xxl-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="d-inline-block me-4 display-30"><i class="ti-calendar text-secondary display-30 pe-3"></i>15 Aug</li>
                                    <li class="d-inline-block"><i class="ti-comments text-secondary display-30 pe-3"></i>2 Comments</li>
                                </ul>
                                <h3><a href="{{route('frontend.news-detail')}}">When i spent the day on the clinical facility</a></h3>
                                <p class="mb-3">We provide you with objective information so that you can map your route to fitness and wellness. Regulatory surroundings can assist aid sponsors.</p>
                                <a href="{{route('frontend.news-detail')}}" class="text-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                    <div class="blog-page">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="blog-list.html#!"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="blog-list.html#!">1</a></li>
                                <li class="page-item"><a class="page-link" href="blog-list.html#!">2</a></li>
                                <li class="page-item"><a class="page-link" href="blog-list.html#!">3</a></li>
                                <li class="page-item"><a class="page-link" href="blog-list.html#!"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="ps-xl-5">
                        <div class="side-bar-butn bg-dark border-radius-5 p-1-6 p-sm-1-9 mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control border-radius-5" placeholder="Search here...">
                                <div class="input-group-append">
                                    <button class="main-btn" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="blog-review bg-dark border-radius-5 p-4 p-xl-1-9 mb-4">
                            <div class="text-center">
                                <img src="frontend/img//avatar/avatar-14.jpg" alt="..." class="rounded-circle mb-3">
                                <h3 class="h5 text-secondary mb-0 font-weight-200">Nebay Kinfe</h3>
                                <span class="text-white display-30">Customer</span>
                                <p class="mb-0 mt-2 text-white">Laboratory stored my business. Laboratory is really well worth tons greater than i paid.</p>
                            </div>
                        </div>
                        <div class="blog-post bg-dark border-radius-5 p-4 p-xl-1-9 mb-4">
                            <div class="heading-one secondary mb-1-9">
                                <span><i></i>Recent Posts</span>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                    <img src="frontend/img//blog/blog-thumb1.jpg" alt="..." class="border-radius-5">
                                </div>
                                <div class="flex-grow-1 ps-4">
                                    <span class="display-30 text-white"><i class="ti-calendar text-secondary pe-2"></i>Sep 08</span>
                                    <p class="mb-0 display-30"><a href="blog-list.html#!" class="text-white">Factsheet provides for any problems</a></p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                    <img src="frontend/img//blog/blog-thumb2.jpg" alt="..." class="border-radius-5">
                                </div>
                                <div class="flex-grow-1 ps-4">
                                    <span class="display-30 text-white"><i class="ti-calendar text-secondary pe-2"></i>Sep 06</span>
                                    <p class="mb-0 display-30"><a href="blog-list.html#!" class="text-white">Research and verify of a covid-19 virus</a></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="frontend/img//blog/blog-thumb3.jpg" alt="..." class="border-radius-5">
                                </div>
                                <div class="flex-grow-1 ps-4">
                                    <span class="display-30 text-white"><i class="ti-calendar text-secondary pe-2"></i>Sep 03</span>
                                    <p class="mb-0 display-30"><a href="blog-list.html#!" class="text-white">Don't underestimate tree for medicine</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-radius-5 p-4 p-xl-1-9 mb-4">
                            <div class="heading-one secondary mb-1-9">
                                <span><i></i>Categories</span>
                            </div>
                            <ul class="side-bar-list list-unstyled m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center"><a href="blog-list.html#!">Scientific </a><span>(5)</span></li>
                                <li class="mb-3 d-flex justify-content-between align-items-center"><a href="blog-list.html#!">Chemistry</a><span>(2)</span></li>
                                <li class="mb-3 d-flex justify-content-between align-items-center"><a href="blog-list.html#!">Pathology </a><span>(1)</span></li>
                                <li class="mb-3 d-flex justify-content-between align-items-center"><a href="blog-list.html#!">Gemological </a><span>(3)</span></li>
                                <li class="mb-3 d-flex justify-content-between align-items-center"><a href="blog-list.html#!">Healthcare </a><span>(7)</span></li>
                                <li class="d-flex justify-content-between align-items-center"><a href="blog-list.html#!">Conferences </a><span>(1)</span></li>
                            </ul>
                        </div>
                        <div class="bg-dark border-radius-5 p-4 p-xl-1-9 mb-4">
                            <div class="heading-one secondary mb-1-9">
                                <span><i></i>Tags</span>
                            </div>
                            <div class="blog-tags">
                                <a href="blog-list.html#!">Medicine</a>
                                <a href="blog-list.html#!">Science</a>
                                <a href="blog-list.html#!">Lab</a>
                                <a href="blog-list.html#!">Test</a>
                                <a href="blog-list.html#!">Virus</a>
                                <a href="blog-list.html#!">Health</a>
                                <a href="blog-list.html#!">Pathology</a>
                                <a href="blog-list.html#!">Pharmacy</a>
                                <a href="blog-list.html#!">Chemistry</a>
                            </div>
                        </div>
                        <div class="bg-dark border-radius-5 p-4 p-xl-1-9">
                            <div class="heading-one secondary mb-1-9">
                                <span><i></i>Follow Us</span>
                            </div>
                            <div class="lab-social-link">
                                <a href="blog-list.html#!" class="me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="blog-list.html#!" class="me-2"><i class="fab fa-twitter"></i></a>
                                <a href="blog-list.html#!" class="me-2"><i class="fab fa-instagram"></i></a>
                                <a href="blog-list.html#!" class="me-2"><i class="fab fa-youtube"></i></a>
                                <a href="blog-list.html#!"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
