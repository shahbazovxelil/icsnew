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

    <!-- favicon -->
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
{{--    <section class="page-title-section bg-img cover-background dark-overlay" data-overlay-dark="7" data-background="img/bg/bg-01.jpg">--}}
{{--        <div class="container">--}}
{{--            <div class="d-md-flex justify-content-between">--}}
{{--                <div class="flex-shrink-0">--}}
{{--                    <h1>Tabs</h1>--}}
{{--                </div>--}}
{{--                <div class="flex-grow-1">--}}
{{--                    <ul class="text-center text-md-end ps-0">--}}
{{--                        <li><a href="index.html">Home</a></li>--}}
{{--                        <li><a href="tabs.html#!">Tabs</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!-- TABS
    ================================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <div class="position-relative elements-block float-start w-100">

                        <div class="inner-title">
                            <div class="heading-one">
                                <span><i></i>horizontal tab</span>
                            </div>
                        </div>

                        <div class="horizontaltab tab-style1 position-relative z-index-9">
                            <ul class="resp-tabs-list hor_1">
                                <li>Why Choose Us</li><br>
                                <li>Our Vision</li><br>
                                <li>Our Mission</li><br>
                                <li>Our Mission2</li>
                            </ul>
                            <div class="resp-tabs-container hor_1 p-0">
                                <div>
                                    <div class="row align-items-center mt-n4">
                                        <div class="col-md-4 mt-4">
                                            <div>
                                                <img src="{{asset('frontend/img/content/why-choose-05.jpg')}}" alt="..." class="border-radius-10">
                                            </div>
                                        </div>
                                        <div class="col-md-8 mt-4">
                                            <div>
                                                <p>We provide you with objective information so that you can map your route to fitness and wellness.</p>
                                                <div class="row mt-n3">
                                                    <div class="col-sm-6 mt-3">
                                                        <div class="d-flex">
                                                            <div class="pt-1">
                                                                <img src="{{asset('frontend/img/icons/icon-06.png')}}" alt="...">
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
                                                                <img src="{{asset('frontend/img/icons/icon-07.png')}}" alt="...">
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
                                                <img src="{{asset('frontend/img/content/why-choose-03.jpg')}}" alt="..." class="border-radius-5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row align-items-center mt-n4">
                                        <div class="col-md-4 mt-4">
                                            <div>
                                                <img src="{{asset('frontend/img/content/why-choose-02.jpg')}}" alt="..." class="border-radius-5">
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
                                <div>
                                    <div class="row align-items-center mt-n4">
                                        <div class="col-md-4 mt-4">
                                            <div>
                                                <img src="{{asset('frontend/img/content/why-choose-02.jpg')}}" alt="..." class="border-radius-5">
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

                        <div class="copy-element"><a class="copy-clipboard" data-clipboard-target="#section">Copy</a></div>
                        <div class="source-element"><a class="source-modal" href="tabs.html#copy-code">Source</a></div>

                        <div id="copy-code" class="mfp-hide white-popup-block popup-copy">
                            <div class="copy-element"><a class="copy-clipboard" data-clipboard-target="#section">copy</a></div>
                            <pre id="section"><code class="language-html"></code></pre>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>




@endsection
