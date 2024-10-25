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



    <section class="page-title-section bg-img cover-background dark-overlay" data-overlay-dark="2" data-background="{{asset('frontend/img/bg/bg-06.png')}}">
        <div class="container">
            <div class="d-md-flex justify-content-between">
                <div class="flex-shrink-0">
                    <h1>About Us</h1>
                </div>
                <div class="flex-grow-1">
                    <ul class="text-center text-md-end ps-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html#!">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT US
    ================================================== -->
    <section class="about-us2">
        <div class="container">
            <div class="row align-itemsxl--center mt-n1-9">
                <div class="col-lg-6 mt-1-9">
                    <div class="position-relative">
                        <div class="row mb-4 align-items-end position-relative z-index-9">
                            <div class="col-6">
                                <div class="text-end">
                                    <img src="frontend/img/content/about-04.jpg" alt="..." class="border-radius-10">
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <img src="frontend/img/content/about-05.jpg" alt="..." class="border-radius-10">
                                </div>
                            </div>
                        </div>
                        <div class="text-center position-relative z-index-9">
                            <img src="frontend/img/content/about-06.jpg" alt="..." class="border-radius-10">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-1-9">
                    <div class="ps-lg-1-9 ps-xl-7">
                        <div class="heading-one mb-1-6 mb-sm-1-9">
                            <span><i></i>About Us</span>
                            <h2>We Employ Latest Research Technology and Company</h2>
                        </div>
                        <p class="mb-1-9">One of the important functions of the science laboratory is the deepening of the scholars know-how that medical principles and alertness are carefully associated with their personal natural environment.</p>
                        <div class="row mb-4 mt-n4">
                            <div class="col-sm-6 mt-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="frontend/img/icons/icon-29.png" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ps-3">
                                        <h3 class="h5">Helpful Test Tips</h3>
                                        <p class="mb-0 w-xl-90">Regulatory surroundings can assist aid sponsors.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="frontend/img/icons/icon-30.png" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ps-3">
                                        <h3 class="h5">Patient Care</h3>
                                        <p class="mb-0 w-xl-90">Regulatory surroundings can assist aid sponsors.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white box-shadow d-inline-block py-3 ps-3 pe-5 border-radius-5">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <i class="fa-solid fa-phone-alt box-icon"></i>
                                </div>
                                <div class="flex-grow-1 ps-3">
                                    <span class="display-31">24 / 7 Service Available</span>
                                    <h6 class="display-27 mb-0">(+44) 123 456 789</h6>
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
    <section class="pt-0">
        <div class="container">
            <div class="heading-one text-center mb-1-9">
                <span><i></i>Meet Our Team</span>
                <h2 class="w-md-60 mx-auto">Expert Physiologist In Laboratory</h2>
            </div>
            <div class="row mt-n1-9">
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="card card-style7 border-0 shadow text-center border-radius-3">
                        <img src="frontend/img/team/team-07.jpg" class="team-img" alt="...">
                        <div class="social-icon">
                            <a href="about.html#!"><i class="ti-twitter"></i></a>
                            <a href="about.html#!"><i class="ti-instagram"></i></a>
                            <a href="about.html#!"><i class="ti-facebook"></i></a>
                            <a href="about.html#!"><i class="ti-linkedin"></i></a>
                        </div>
                        <div class="card-body p-1-6 p-xl-1-9">
                            <h3 class="h4"><a href="team-details.html">Faruz Nuguse</a></h3>
                            <span class="text-primary">Pathology Special</span>
                            <p class="mb-2 border-top pt-3 mt-3">faruznuguse@gmail.com</p>
                            <p class="mb-0">(+44) 152-567-987</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="card card-style7 border-0 shadow text-center border-radius-3">
                        <img src="frontend/img/team/team-08.jpg" class="team-img" alt="...">
                        <div class="social-icon">
                            <a href="about.html#!"><i class="ti-twitter"></i></a>
                            <a href="about.html#!"><i class="ti-instagram"></i></a>
                            <a href="about.html#!"><i class="ti-facebook"></i></a>
                            <a href="about.html#!"><i class="ti-linkedin"></i></a>
                        </div>
                        <div class="card-body p-1-6 p-xl-1-9">
                            <h3 class="h4"><a href="team-details.html">Idris Luwam</a></h3>
                            <span class="text-primary">Research Expert</span>
                            <p class="mb-2 border-top pt-3 mt-3">idrisluwam@gmail.com</p>
                            <p class="mb-0">(+44) 152-567-987</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="card card-style7 border-0 shadow text-center border-radius-3">
                        <img src="frontend/img/team/team-09.jpg" class="team-img" alt="...">
                        <div class="social-icon">
                            <a href="about.html#!"><i class="ti-twitter"></i></a>
                            <a href="about.html#!"><i class="ti-instagram"></i></a>
                            <a href="about.html#!"><i class="ti-facebook"></i></a>
                            <a href="about.html#!"><i class="ti-linkedin"></i></a>
                        </div>
                        <div class="card-body p-1-6 p-xl-1-9">
                            <h3 class="h4"><a href="team-details.html">Selam Bisrat</a></h3>
                            <span class="text-primary">Lab Head</span>
                            <p class="mb-2 border-top pt-3 mt-3">selambisrat@gmail.com</p>
                            <p class="mb-0">(+44) 152-567-987</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="card card-style7 border-0 shadow text-center border-radius-3">
                        <img src="frontend/img/team/team-10.jpg" class="team-img" alt="...">
                        <div class="social-icon">
                            <a href="about.html#!"><i class="ti-twitter"></i></a>
                            <a href="about.html#!"><i class="ti-instagram"></i></a>
                            <a href="about.html#!"><i class="ti-facebook"></i></a>
                            <a href="about.html#!"><i class="ti-linkedin"></i></a>
                        </div>
                        <div class="card-body p-1-6 p-xl-1-9">
                            <h3 class="h4"><a href="team-details.html">Samantha Wood</a></h3>
                            <span class="text-primary">Laboratory Technician</span>
                            <p class="mb-2 border-top pt-3 mt-3">ristopherg@gmail.com</p>
                            <p class="mb-0">(+44) 152-567-987</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION
    ================================================== -->
    <section class="bg-secondary call-to-action2">
        <div class="container">
            <div class="row position-relative z-index-9">
                <div class="col-lg-8 mx-auto">
                    <div class="heading-one white text-center mb-1-9">
                        <h2 class="text-white mb-4 mx-auto">Expect Nothing But The Best Form Medical Technologies</h2>
                        <a href="contact.html" class="butn-style1 primary white position-relative z-index-9">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute top-0 end-0 opacity05">
            <img src="frontend/img/content/shape-02.png" alt="...">
        </div>
        <div class="position-absolute top-0 left-0 opacity05">
            <img src="frontend/img/content/shape-03.png" alt="...">
        </div>
    </section>

    <!-- TESTIMONIALS
    ================================================== -->
    <section class="p-lg-0">
        <div class="container">
            <div class="bg-img cover-background py-lg-10" data-background="frontend/img/content/map-bg.jpg">
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
                                        <img src="{{asset('frontend/img/avatar/avatar-05.jpg')}}" class="rounded-circle" alt="...">
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


@endsection
