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
    <title>ICS KIMYA MADDELERI</title>

    @include('frontend.includes.head-links')

    <style>
        .testimonial-carousel .d-flex {
            margin: 0 10px; /* Şəkillər arasındakı məsafəni azaltmaq üçün */
            padding: 0 15px; /* Bu dəyəri dəyişərək məsafəni tənzimləyin */

        }

        .testimonial-carousel {
            display: flex;
            justify-content: center;
            gap: 20px; /* Şəkillər arasındakı məsafəni azaltmaq üçün */
        }


        .testimonial-carousel img {
            border: 2px solid #ccc; /* Sərhəd üçün rəng */
            width: 400px; /* Şəklin ölçüsünü uyğun olaraq tənzimləyin */
            height: 200px; /* Şəklin ölçüsünü uyğun olaraq tənzimləyin */
        }
        .testimonial-carousel .d-flex {
            padding: 0 5px; /* Hər slaydın sağ və sol tərəfinə 5px məsafə */
        }



    </style>

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
    <header class="header-style2">

        <div class="top-bar bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-xs-12">
                        <div class="top-bar-info">
                            <ul class="ps-0">
                                <li><i class="ti-mobile"></i>(+994) 111 111 111</li>
                                <li class="d-none d-sm-inline-block"><i class="ti-email"></i>ics-test@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 d-none d-md-block">
                        <ul class="top-social-icon ps-0">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="nav-item dropdown language-select-container"> <!-- Yeni div əlavə edin -->
                                <select onchange="location = this.value;" class="language-select">
                                    @foreach($flanguages as $flanguage)
                                        <option value="{{ route('frontend.switchLanguage', $flanguage->locale) }}" {{ $flanguage->locale == app()->getLocale() ? 'selected' : '' }}>
                                            {{ ucfirst($flanguage->locale) }}
                                        </option>
                                    @endforeach
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-default">

            <!-- start top search -->
{{--            <div class="top-search bg-primary">--}}
{{--                <div class="container">--}}
{{--                    <form class="search-form" action="https://biology.websitelayout.net/search.html" method="GET" accept-charset="utf-8">--}}
{{--                        <div class="input-group">--}}
{{--                                <span class="input-group-addon cursor-pointer">--}}
{{--                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>--}}
{{--                                </span>--}}
{{--                            <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">--}}
{{--                            <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- end top search -->

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-12">
                        <div class="menu_area">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">
                                <div class="navbar-header navbar-header-custom">
                                    <!-- start logo -->
                                    <a href="{{route('frontend.index')}}" class="navbar-brand logodefault"><img id="logo" src="{{asset('frontend/img/logos/logo-ch.png')}}" alt="logo" /></a>
                                    <!-- end logo -->
                                </div>

                                <div class="navbar-toggler bg-primary"></div>

                                <!-- menu area -->
                                <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                    <li><a href="{{route('frontend.index')}}">Home</a>
                                    <li><a href="{{route('frontend.service')}}">Services</a>
                                    <li><a href="{{route('frontend.products')}}">Products</a>
                                    <li><a href="{{route('frontend.faq')}}">Faq</a>
                                    <li><a href="{{route('frontend.contact-us')}}">Contact</a>
                                    <li><a href="{{route('frontend.about')}}">About</a>




                                </ul>
                                <!-- end menu area -->

                                <!-- start attribute navigation -->
                                <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                    <ul>
{{--                                        <li class="search"><a href="index-2.html#!"><i class="fas fa-search"></i></a></li>--}}
                                        <li class="d-none d-xl-inline-block"><a href="#" class="butn-style2 medium text-white"><span>ics</span></a></li>
                                    </ul>
                                </div>
                                <!-- end attribute navigation -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- BANNER
    ================================================== -->
    <section class="bg-img cover-background pt-6 pb-10 pt-sm-6 pb-sm-14 py-md-16 py-lg-20 py-xxl-24 bg-position left-overlay-dark" data-overlay-dark="8" data-background="{{asset('frontend/img/banner/banner-03.jpg')}}">
        <div class="container pt-6 pt-md-0">
            <div class="row align-items-center">
                <div class="col-md-10 col-lg-10 col-xl-9 col-xxl-8 mb-1-9 mb-lg-0 py-2 position-relative">
                    <span class="lead text-secondary text-uppercase mb-2 d-block">Chemical & Pharmaceutical Research </span>
                    <h1 class="text-white display-1 font-weight-700 lh-1 mb-2-2 text-shadow-large">Scientific Research For <strong> Bright Future </strong> World</h1>
                </div>
            </div>
        </div>
    </section>


    <!-- SERVICES
    ================================================== -->

{{--    @include('frontend.includes.our-service')--}}
    <!-- ABOUT US
    ================================================== -->
    @include('frontend.includes.index-aboutus')

    <section class="p-lg-0">
        <div class="container">
            <div class="bg-img cover-background py-lg-10" data-background="frontend/img/content/map-bg.jpg">
                <div class="heading-one text-center mb-1-9">
                    <h2 class="w-md-60 mx-auto">Partners!</h2>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <div class="d-flex justify-content-center ">
                        <img src="frontend/img/avatar/partners1.jpg"  alt="...">
                    </div>
                    <div class="d-flex justify-content-center">
                        <img src="frontend/img/avatar/partners2.jpeg"  alt="...">
                    </div>
                    <div class="d-flex justify-content-center">
                        <img src="frontend/img/avatar/partners2.jpeg" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WHY CHOOSE US
    ================================================== -->
    @include('frontend.includes.why-choose-us')

    <!-- PRICING TABLE
    ================================================== -->
{{--    @include('frontend.includes.our-pricing-plan')--}}

    <!-- CALL TO ACTION
    ================================================== -->
    @include('frontend.includes.call-to-action')

    <!-- BLOG - Publish What you Think
    ================================================== -->
    @include('frontend.includes.certificate')




    <!-- FOOTER
    ================================================== -->
    @include('frontend.includes.footer-index')



    </div>

    <!-- BUY TEMPLATE
    ================================================== -->
{{--    <div class="buy-theme alt-font d-none d-lg-inline-block"><a href="https://wrapbootstrap.com/theme/biology-laboratory-and-research-template-WB05NN5HP" target="_blank"><i class="fas fa-cart-plus"></i><span>Buy Template</span></a></div>--}}

{{--    <div class="all-demo alt-font d-none d-lg-inline-block"><a href="https://www.chitrakootweb.com/contact.html" target="_blank"><i class="far fa-envelope"></i><span>Quick Question?</span></a></div>--}}

    <!-- start scroll to top -->
    <a href="index-2.html#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

    <!-- jQuery -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>

    <!-- popper js -->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>

    <!-- bootstrap -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

    <!-- core.min.js -->
    <script src="{{asset('frontend/js/core.min.js')}}"></script>

    <!-- search -->
    <script src="{{asset('frontend/search/search.js')}}"></script>

    <!-- custom scripts -->
    <script src="{{asset('frontend/js/main.js')}}"></script>

    <!-- form plugins js -->
    <script src="{{asset('frontend/quform/js/plugins.js')}}"></script>

    <!-- form scripts js -->
    <script src="{{asset('frontend/quform/js/scripts.js')}}"></script>

    <!-- all js include end -->

    </body>

    </html>


