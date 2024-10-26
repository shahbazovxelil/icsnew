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
            <div class="row mt-n5">

                <div class="col-lg-4 mt-5">
                    <div class="pe-xl-5">
                        <div class="bg-dark border-radius-5 p-4 p-xl-1-9 mb-4">
                            <div class="heading-one secondary mb-1-9">
                                <span>Categories</span>
                            </div>
                            <ul class="side-bar-list list-unstyled m-0">
                                {{-- SOL KATEQORIYALARIN FOREACH-I BURA YAZILACAQ -- START --}}
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a href="/product-detail?id=123">
                                        Scientific
                                    </a>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a href="/product-detail?id=123">
                                        Chemistry
                                    </a>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a href="/product-detail?id=123">
                                        Pathology
                                    </a>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a href="/product-detail?id=123">
                                        Gemological
                                    </a>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a href="/product-detail?id=123">
                                        Healthcare
                                    </a>
                                </li>
                                {{-- SOL KATEQORIYALARIN FOREACH-I BURA YAZILACAQ -- STOP --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-5">
                    <div class="horizontaltab tab-style1 position-relative z-index-9">
                        <ul class="resp-tabs-list hor_1">
                            {{-- YUXARI TABLARIN FOREACH-I BURA YAZILACAQ -- START --}}
                            <li>Why Choose Us</li>
                            <li>Our Vision</li>
                            <li>Our Mission</li>
                            {{-- YUXARI TABLARIN FOREACH-I BURA YAZILACAQ -- STOP --}}
                        </ul>
                        <div class="resp-tabs-container hor_1 p-0">
                            <div> {{--BIRINCI TAB -- START--}}
                                <div>
                                    <p>1. tab -->> One of the important functions of the science laboratory is the deepening of the scholars know-how that medical principles and alertness are carefully associated with their personal natural environment.</p>
                                    <p class="mb-0">We provide you with objective information so that you can map your route to fitness and wellness.</p>
                                </div>
                            </div> {{--BIRINCI TAB -- STOP--}}

                            <div> {{--IKINCI TAB -- START--}}
                                <div>
                                    <p>2. tab -->> One of the important functions of the science laboratory is the deepening of the scholars know-how that medical principles and alertness are carefully associated with their personal natural environment.</p>
                                    <p class="mb-0">We provide you with objective information so that you can map your route to fitness and wellness.</p>
                                </div>
                            </div> {{--IKINCI TAB -- STOP--}}

                            <div> {{--UCUNCU TAB -- START--}}
                                <div>
                                    <p>3. tab -->> One of the important functions of the science laboratory is the deepening of the scholars know-how that medical principles and alertness are carefully associated with their personal natural environment.</p>
                                    <p class="mb-0">We provide you with objective information so that you can map your route to fitness and wellness.</p>
                                </div>
                            </div> {{--IKINCI TAB -- STOP--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
