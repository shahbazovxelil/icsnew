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

    <!-- HEADER
    ================================================== -->
    @include('frontend.includes.header-light')
    <!-- PAGE TITLE
    ================================================== -->
    <section class="page-title-section bg-img cover-background dark-overlay" data-overlay-dark="7" data-background="{{asset('frontend/img/bg/bg-06.png')}}">
        <div class="container">
            <div class="d-md-flex justify-content-between">
                <div class="flex-shrink-0">
                    <h1>Contact Us</h1>
                </div>
                <div class="flex-grow-1">
                    <ul class="text-center text-md-end ps-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="contact.html#!">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT US
    ================================================== -->
    <section>
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 col-xl-8">
                    <div class="shadow bg-light p-1-9 p-lg-5">
                        <div class="heading-one sm mb-1-6 mb-sm-1-9">
                            <span><i></i>Contact Form</span>
                            <h2>Get in touch with us!</h2>
                        </div>
                        <form class="quform" action="https://biology.websitelayout.net/quform/contact.php" method="post" enctype="multipart/form-data" onclick="">

                            <div class="quform-elements">

                                <div class="row">

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="name">Your Name <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="name" type="text" name="name" placeholder="Your name here" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="email">Your Email <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="email" type="text" name="email" placeholder="Your email here" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="phone">Contact Number</label>
                                            <div class="quform-input">
                                                <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Textarea element -->
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="message">Message <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
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
                <div class="col-lg-6 col-xl-4">
                    <div class="bg-secondary shadow d-table h-100 w-100">
                        <div class="position-relative z-index-9 d-table-cell vertical-align-middle py-1-9 py-lg-0 px-1-6 px-sm-1-9 px-lg-5">
                            <div class="heading-one white mb-1-6 mb-sm-1-9">
                                <span><i></i>Contact Info</span>
                                <h2 class="text-white">Our Full Info</h2>
                            </div>
                            <p class="border-bottom pb-4 mb-1-6 mb-xxl-5 text-white">We are assisting to increase health & assisting any where, any time on your services. We provide you with objective information.</p>
                            <ul class="list-unstyled border-bottom border-color-light-white pb-1-6 pb-xxl-5 mb-1-6 mb-xxl-5">
                                <li class="mb-2 mb-sm-4"><i class="fas fa-phone-alt text-white me-3"></i><a href="contact.html#!" class="text-white">(+44) 123 456 789</a></li>
                                <li class="mb-2 mb-sm-4"><i class="fas fa-envelope-open text-white me-3"></i><a href="contact.html#!" class="text-white">info@example.com</a></li>
                                <li class="mb-2 mb-sm-4"><i class="fas fa-map-marker-alt text-white me-3"></i><a href="contact.html#!" class="text-white">66 Guild Street 512B, North Town.</a></li>
                                <li><i class="far fa-clock text-white me-3"></i><a href="contact.html#!" class="text-white">Mon - Fri : 08:00 am to 07:00 pm</a></li>
                            </ul>
                            <div class="social-icon-style2">
                                <a href="contact.html#!" class="me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="contact.html#!" class="me-2"><i class="fab fa-twitter"></i></a>
                                <a href="contact.html#!" class="me-2"><i class="fab fa-instagram"></i></a>
                                <a href="contact.html#!" class="me-2"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP
    ================================================== -->
    <section class="p-0">
        <iframe class="map" src="https://maps.google.com/maps?q=london&t=&z=13&ie=UTF8&iwloc=&output=embed" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </section>


@endsection
