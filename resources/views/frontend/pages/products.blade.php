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
    <title>ics</title>

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
                    <h1>Products1</h1>
                </div>
                <div class="flex-grow-1">
                    <ul class="text-center text-md-end ps-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="our-team.html#!">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM
    ================================================== -->
{{--    <section>--}}
{{--        <div class="container">--}}
{{--            <div class="heading-one text-center mb-1-9">--}}
{{--                <span><i></i>Products</span>--}}
{{--                <h2 class="w-md-60 mx-auto">Products2</h2>--}}
{{--            </div>--}}

{{--            <div class="row g-5 mt-n4">--}}
{{--                <div class="col-md-4 col-lg-2 mt-2">--}}
{{--                    <div class="card card-style2 border-0">--}}
{{--                        <img src="{{asset('frontend/img/team/team-01.jpg')}}" alt="..." class="border-radius-10">--}}
{{--                        <div class="card-body d-flex justify-content-between align-items-center">--}}
{{--                            <div>--}}
{{--                                <h3 class="h5 text-secondary mb-1"><a href="team-details.html">Faruz Nuguse</a></h3>--}}
{{--                                <span class="display-30">Pathology Special</span>--}}
{{--                            </div>--}}
{{--                            <div class="social-link text-end">--}}
{{--                                <span><i class="fa-solid fa-share-nodes"></i></span>--}}
{{--                                <ul class="social-icon">--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-facebook"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-twitter"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-instagram"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-linkedin"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-lg-2 mt-2">--}}
{{--                    <div class="card card-style2 border-0">--}}
{{--                        <img src="{{asset('frontend/img/team/team-02.jpg')}}" alt="..." class="border-radius-10">--}}
{{--                        <div class="card-body d-flex justify-content-between align-items-center">--}}
{{--                            <div>--}}
{{--                                <h3 class="h5 text-secondary mb-1"><a href="team-details.html">Idris Luwam</a></h3>--}}
{{--                                <span class="display-30">Research Expert</span>--}}
{{--                            </div>--}}
{{--                            <div class="social-link text-end">--}}
{{--                                <span><i class="fa-solid fa-share-nodes"></i></span>--}}
{{--                                <ul class="social-icon">--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-facebook"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-twitter"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-instagram"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-linkedin"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-lg-2 mt-2">--}}
{{--                    <div class="card card-style2 border-0">--}}
{{--                        <img src="{{asset('frontend/img/team/team-03.jpg')}}" alt="..." class="border-radius-10">--}}
{{--                        <div class="card-body d-flex justify-content-between align-items-center">--}}
{{--                            <div>--}}
{{--                                <h3 class="h5 text-secondary mb-1"><a href="team-details.html">Selam Bisrat</a></h3>--}}
{{--                                <span class="display-30">Lab Head</span>--}}
{{--                            </div>--}}
{{--                            <div class="social-link text-end">--}}
{{--                                <span><i class="fa-solid fa-share-nodes"></i></span>--}}
{{--                                <ul class="social-icon">--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-facebook"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-twitter"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-instagram"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-linkedin"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-lg-2 mt-2">--}}
{{--                    <div class="card card-style2 border-0">--}}
{{--                        <img src="{{asset('frontend/img/team/team-04.jpg')}}" alt="..." class="border-radius-10">--}}
{{--                        <div class="card-body d-flex justify-content-between align-items-center">--}}
{{--                            <div>--}}
{{--                                <h3 class="h5 text-secondary mb-1"><a href="team-details.html">Samantha Wood</a></h3>--}}
{{--                                <span class="display-30">Laboratory Technician</span>--}}
{{--                            </div>--}}
{{--                            <div class="social-link text-end">--}}
{{--                                <span><i class="fa-solid fa-share-nodes"></i></span>--}}
{{--                                <ul class="social-icon">--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-facebook"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-twitter"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-instagram"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-linkedin"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-lg-2 mt-2">--}}
{{--                    <div class="card card-style2 border-0">--}}
{{--                        <img src="{{asset('frontend/img/team/team-05.jpg')}}" alt="..." class="border-radius-10">--}}
{{--                        <div class="card-body d-flex justify-content-between align-items-center">--}}
{{--                            <div>--}}
{{--                                <h3 class="h5 text-secondary mb-1"><a href="team-details.html">Fnan Alem</a></h3>--}}
{{--                                <span class="display-30">Laboratory Technician</span>--}}
{{--                            </div>--}}
{{--                            <div class="social-link text-end">--}}
{{--                                <span><i class="fa-solid fa-share-nodes"></i></span>--}}
{{--                                <ul class="social-icon">--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-facebook"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-twitter"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-instagram"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-linkedin"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-lg-2 mt-2">--}}
{{--                    <div class="card card-style2 border-0">--}}
{{--                        <img src="{{asset('frontend/img/team/team-06.jpg')}}" alt="..." class="border-radius-10">--}}
{{--                        <div class="card-body d-flex justify-content-between align-items-center">--}}
{{--                            <div>--}}
{{--                                <h3 class="h5 text-secondary mb-1"><a href="team-details.html">Habte Abel</a></h3>--}}
{{--                                <span class="display-30">Research Head</span>--}}
{{--                            </div>--}}
{{--                            <div class="social-link text-end">--}}
{{--                                <span><i class="fa-solid fa-share-nodes"></i></span>--}}
{{--                                <ul class="social-icon">--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-facebook"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-twitter"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-instagram"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-linkedin"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-lg-2 mt-2">--}}
{{--                    <div class="card card-style2 border-0">--}}
{{--                        <img src="{{asset('frontend/img/team/team-06.jpg')}}" alt="..." class="border-radius-10">--}}
{{--                        <div class="card-body d-flex justify-content-between align-items-center">--}}
{{--                            <div>--}}
{{--                                <h3 class="h5 text-secondary mb-1"><a href="team-details.html">Habte Abel</a></h3>--}}
{{--                                <span class="display-30">Research Head</span>--}}
{{--                            </div>--}}
{{--                            <div class="social-link text-end">--}}
{{--                                <span><i class="fa-solid fa-share-nodes"></i></span>--}}
{{--                                <ul class="social-icon">--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-facebook"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-twitter"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-instagram"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="our-team.html#!">--}}
{{--                                            <i class="ti-linkedin"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    @include('frontend.includes.portfolio')


@endsection
