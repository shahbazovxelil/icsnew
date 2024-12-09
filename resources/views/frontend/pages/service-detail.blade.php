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
    <title>ICS KİMYA MADDELERİ</title>



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
    <section class="page-title-section bg-img cover-background dark-overlay" data-overlay-dark="7" data-background="frontend/img/bg/bg-01.jpg">
        <div class="container">
            <div class="d-md-flex justify-content-between">
                <div class="flex-shrink-0">
                    <h1>Team Details</h1>
                </div>
                <div class="flex-grow-1">
                    <ul class="text-center text-md-end ps-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="team-details.html#!">Team Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM DETAILS
    ================================================== -->
    <section class="team-details">
        <div class="container">
            <div class="row g-0 align-items-end mb-2-9">
                <div class="col-lg-9">
                    <div class="team-img">

                        <img src="{{asset($service->image)}}" alt="">

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bg-white shadow team-content">
                        <div class="mb-4 border-bottom pb-3">
                            <h4 class="text-uppercase mb-0 text-primary display-28 display-md-20">{{$service->title}}</h4>
                            <span>Pathology Special</span>
                        </div>
                        <ul class="list-style4 list-unstyled border-bottom pb-4 mb-4">
                            <li>
                                <h6>Exprience : </h6>
                                <span class="ps-2">10 Years</span>
                            </li>
                            <li>
                                <h6>Email : </h6>
                                <span class="ps-2">info@example.com</span>
                            </li>
                            <li>
                                <h6>Phone : </h6>
                                <span class="ps-2">(+44) 123 456 789</span>
                            </li>
                            <li>
                                <h6>Address : </h6>
                                <span class="ps-2">66 Guild Street 512B, Great North Town.</span>
                            </li>
                            <li>
                                <h6>Website : </h6>
                                <span class="ps-2">www.example.com</span>
                            </li>
                        </ul>
                        <ul class="social-icon-style1 list-unstyled mb-0">
                            <li class="d-inline-block me-1"><a href="team-details.html#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="d-inline-block me-1"><a href="team-details.html#!"><i class="fab fa-twitter"></i></a></li>
                            <li class="d-inline-block me-1"><a href="team-details.html#!"><i class="fab fa-youtube"></i></a></li>
                            <li class="d-inline-block"><a href="team-details.html#!"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mb-2-9 mt-n1-9">
                <div class="col-lg-6 mt-1-9">
                    <div class="pe-5">
                        <div class="heading-one mb-1-6 mb-sm-1-9">
                            <span><i></i>About Faruz Nuguse</span>
                        </div>
                        <p class="mb-0">{{$service->description}}</p>
                    </div>
                </div>
{{--                <div class="col-lg-6 mt-1-9">--}}
{{--                    <div>--}}
{{--                        <div class="heading-one mb-1-6 mb-sm-1-9">--}}
{{--                            <span><i></i>Skills</span>--}}
{{--                        </div>--}}
{{--                        <div class="row mt-n3">--}}
{{--                            <div class="col-sm-6 mt-3">--}}
{{--                                <div class="bg-light p-3 border-radius-5">--}}
{{--                                    <h3 class="display-28 font-weight-400 mb-0"><i class="ti-check text-secondary me-3"></i>Medical Specialties</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6 mt-3">--}}
{{--                                <div class="bg-light p-3 border-radius-5">--}}
{{--                                    <h3 class="display-28 font-weight-400 mb-0"><i class="ti-check text-secondary me-3"></i>Diabities Testing</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6 mt-3">--}}
{{--                                <div class="bg-light p-3 border-radius-5">--}}
{{--                                    <h3 class="display-28 font-weight-400 mb-0"><i class="ti-check text-secondary me-3"></i>Pathology Testing</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6 mt-3">--}}
{{--                                <div class="bg-light p-3 border-radius-5">--}}
{{--                                    <h3 class="display-28 font-weight-400 mb-0"><i class="ti-check text-secondary me-3"></i>Research Experts</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row mb-2-9">
                <div class="col-lg-12">
                    <div>
                        <p class="mb-0">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
