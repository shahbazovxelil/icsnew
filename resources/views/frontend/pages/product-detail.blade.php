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
    <title>ICS KIMYA MADDELERI</title>


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
                    <h1>Portfolio Details</h1>
                </div>
                <div class="flex-grow-1">
                    <ul class="text-center text-md-end ps-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="portfolio-details.html#!">Portfolio Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO DETAILS
    ================================================== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <img src="{{asset('frontend/img/portfolio/portfolio-details-01.jpg')}}" alt="..." class="mb-1-9 border-radius-5">
                    </div>
                </div>
            </div>
            <div class="row mb-1-9 mt-n4">
                <div class="col-lg-8 mt-4">
                    <div>
                        <img src="{{asset('frontend/img/portfolio/portfolio-details-02.jpg')}}" alt="..." class="mb-1-9 border-radius-5">
                        <div class="heading-one service-title mb-3">
                            <h2 class="m-0">Personnel Competence</h2>
                        </div>
                        <p>Personnel competence have an more and more more vital area in organic research, and withinside the boundary among chemical and organic research: chemical and organic laboratories are increasingly permeable. There are methods to interpret those observations.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3 d-flex align-items-baseline"><i class="ti-check pe-3 text-primary"></i>We provide you with objective information so that you can map your route to fitness and wellness.</li>
                            <li class="mb-3 d-flex align-items-baseline"><i class="ti-check pe-3 text-primary"></i>One of the important functions of the science laboratory is the deepening of the scholars know-how.</li>
                            <li class="mb-3 d-flex align-items-baseline"><i class="ti-check pe-3 text-primary"></i>That medical principles and alertness are carefully associated with their personal natural environment.</li>
                            <li class="d-flex align-items-baseline"><i class="ti-check pe-3 text-primary"></i>We are assisting to increase health & assisting any where, any time on your services.</li>
                        </ul>
                        <div class="row mt-n4 mb-1-9">
                            <div class="col-md-6 mt-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('frontend/img/icons/icon-29.png')}}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ps-4">
                                        <h3 class="h5">Helpful Test Tips</h3>
                                        <p class="mb-0 w-xl-90">Regulatory surroundings can assist aid sponsors.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('frontend/img/icons/icon-30.png')}}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ps-4">
                                        <h3 class="h5">Patient Care</h3>
                                        <p class="mb-0 w-xl-90">Regulatory surroundings can assist aid sponsors.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('frontend/img/icons/icon-31.png')}}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ps-4">
                                        <h3 class="h5">Latest Equipment</h3>
                                        <p class="mb-0 w-xl-90">Regulatory surroundings can assist aid sponsors.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('frontend/img/icons/icon-32.png')}}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ps-4">
                                        <h3 class="h5">Medical Research</h3>
                                        <p class="mb-0 w-xl-90">Regulatory surroundings can assist aid sponsors.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">He outstanding classes of researchers inside biology, who deal with one of a kind questions. Functional biologists search for bodily and chemical mechanisms explaining how the complicated macromolecular gadgets found in organisms satisfy their functions. We provide you with objective information so that you can map your route to fitness and wellness.</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="bg-light p-1-6 p-sm-1-9 p-lg-5 border-radius-5 mb-1-9">
                        <div class="heading-one mb-1-9">
                            <span><i></i>Project Info</span>
                        </div>
                        <ul class="list-unstyled mb-0 p-0">
                            <li class="d-flex justify-content-between mb-3 border-bottom pb-3">
                                <h3 class="display-30 text-primary font-weight-400 display-29 display-sm-28 mb-0">Client</h3>
                                <p class="mb-0 display-30">Aatifa Asmara</p>
                            </li>
                            <li class="d-flex justify-content-between mb-3 border-bottom pb-3">
                                <h3 class="display-30 text-primary font-weight-400 display-29 display-sm-28 mb-0">Category</h3>
                                <p class="mb-0 display-30">Pathology</p>
                            </li>
                            <li class="d-flex justify-content-between mb-3 border-bottom pb-3">
                                <h3 class="display-30 text-primary font-weight-400 display-29 display-sm-28 mb-0">Project Value</h3>
                                <p class="mb-0 display-30">$967</p>
                            </li>
                            <li class="d-flex justify-content-between mb-3 border-bottom pb-3">
                                <h3 class="display-30 text-primary font-weight-400 display-29 display-sm-28 mb-0">Date</h3>
                                <p class="mb-0 display-30">Sep 10, 2023</p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <h3 class="display-30 text-primary font-weight-400 display-29 display-sm-28 mb-0">Website</h3>
                                <p class="mb-0 display-30">www.website.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-light p-1-6 p-sm-1-9 p-lg-5 border-radius-5">
                        <div class="heading-one mb-1-9">
                            <span><i></i>Contact</span>
                        </div>
                        <form class="quform" action="https://biology.websitelayout.net/quform/contact.php" method="post" enctype="multipart/form-data" onclick="">

                            <div class="quform-elements">

                                <div class="row">

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="name" type="text" name="name" placeholder="Your name here*" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="email" type="text" name="email" placeholder="Your email here*" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here*" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Textarea element -->
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <div class="quform-input">
                                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words*"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Textarea element -->

                                    <!-- Begin Captcha element -->
                                    <div class="col-md-12">
                                        <div class="quform-element">
                                            <div class="form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="quform-captcha">
                                                    <div class="quform-captcha-inner">
                                                        <img src="{{asset('frontend/quform/images/captcha/courier-new-light.png')}}" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Captcha element -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="butn-style2 border-0" type="submit"><span>Send Message</span></button>
                                        </div>
                                        <div class="quform-loading-wrap text-left"><span class="quform-loading"></span></div>
                                    </div>
                                    <!-- End Submit button -->

                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="border border-radius-5 p-1-6 p-sm-1-9 p-lg-5">
                        <p class="display-28 display-md-22 display-lg-18 text-secondary font-weight-500 position-relative">
                            <img src="{{asset('frontend/img/content/right-quote.png')}}" alt="..." class="position-absolute opacity1">
                            We are assisting to increase health & assisting any where, any time on your services. We provide you with objective information.
                        </p>
                        <small class="display-28 text-primary"><i class="ti-minus me-2"></i>Fethawit Asfaha</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="heading-one service-title mb-3">
                            <h2 class="m-0">Related Projects</h2>
                        </div>
                        <div class="portfolio-detail-carousel owl-carousel owl-theme">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-style1 position-relative">
                                    <img src="{{asset('frontend/img/portfolio/portfolio-02.jpg')}}" alt="..." class="border-radius-3">
                                    <div class="hover-detail">
                                        <div class="hover-text">
                                            <div class="hover-inner">
                                                <h6><a href="portfolio-details.html" class="text-white">Advices</a></h6>
                                                <h3 class="h4"><a href="portfolio-details.html" class="text-white portfolio-link">Health Care</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-wrapper">
                                <div class="portfolio-style1 position-relative">
                                    <img src="{{asset('frontend/img/portfolio/portfolio-03.jpg')}}" alt="..." class="border-radius-3">
                                    <div class="hover-detail">
                                        <div class="hover-text">
                                            <div class="hover-inner">
                                                <h6><a href="portfolio-details.html" class="text-white">Laboratory</a></h6>
                                                <h3 class="h4"><a href="portfolio-details.html" class="text-white portfolio-link">Hemoglobin Test</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-wrapper">
                                <div class="portfolio-style1 position-relative">
                                    <img src="{{asset('frontend/img/portfolio/portfolio-04.jpg')}}" alt="..." class="border-radius-3">
                                    <div class="hover-detail">
                                        <div class="hover-text">
                                            <div class="hover-inner">
                                                <h6><a href="portfolio-details.html" class="text-white">Pathology</a></h6>
                                                <h3 class="h4"><a href="portfolio-details.html" class="text-white portfolio-link">Organic Synthesis</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-wrapper">
                                <div class="portfolio-style1 position-relative">
                                    <img src="{{asset('frontend/img/portfolio/portfolio-05.jpg')}}" alt="..." class="border-radius-3">
                                    <div class="hover-detail">
                                        <div class="hover-text">
                                            <div class="hover-inner">
                                                <h6><a href="portfolio-details.html" class="text-white">Biochemistry</a></h6>
                                                <h3 class="h4"><a href="portfolio-details.html" class="text-white portfolio-link">Soil Fertility</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-wrapper">
                                <div class="portfolio-style1 position-relative">
                                    <img src="{{asset('frontend/img/portfolio/portfolio-06.jpg')}}" alt="..." class="border-radius-3">
                                    <div class="hover-detail">
                                        <div class="hover-text">
                                            <div class="hover-inner">
                                                <h6><a href="portfolio-details.html" class="text-white">Immunology</a></h6>
                                                <h3 class="h4"><a href="portfolio-details.html" class="text-white portfolio-link">Colorectal Cancer</a></h3>
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


@endsection
