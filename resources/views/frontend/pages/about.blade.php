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
    <meta name="keywords" content="ICS Kimya" />
    <meta name="description" content="ICS Kimya" />

    <!-- title  -->
    <title>ICS KIMYA MADDELERI</title>



</head>

<body>

<!-- PAGE LOADING
================================================== -->
<div id="preloader"></div>

<!-- MAIN WRAPPER
================================================== -->
<div class="main-wrapper">




    @include('frontend.includes.header-light')



{{--    <section class="page-title-section bg-img cover-background dark-overlay" data-overlay-dark="2" data-background="{{asset('frontend/img/bg/bg-06.png')}}">--}}
{{--        <div class="container">--}}
{{--            <div class="d-md-flex justify-content-between">--}}
{{--                <div class="flex-shrink-0">--}}
{{--                    <h1>About Us</h1>--}}
{{--                </div>--}}
{{--                <div class="flex-grow-1">--}}
{{--                    <ul class="text-center text-md-end ps-0">--}}
{{--                        <li><a href="index.html">Home</a></li>--}}
{{--                        <li><a href="about.html#!">About Us</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!-- ABOUT US
    ================================================== -->
    <section class="about-us2">
        <div class="container">
            <div class="row align-itemsxl--center mt-n1-9">
                <div class="col-lg-6 mt-1-9">
                    <div class="ps-lg-1-9 ps-xl-7">
                        <div class="heading-one mb-1-6 mb-sm-1-9">
                            <span><i></i>About Us</span>
                            <h2>About us</h2>
                        </div>
                        <p class="mb-1-9">

                            Deep Drilling Chemicals Ltd. ( DDC ), 2009 yılından bu yana sıcak su ve petrol sondajlarına üretici ve tedarikçi olarak hizmet vermektedir. 2009 yılında, firmamız, Kuzey Irak'ta kayıtlı olarak faaliyet gösteren Samsa Company ( SMS ) adı altında hizmet vermekteydi. 2010 yılının başında, firma ismimizi yenileyerek Deep Drilling Chemicals Ltd. ( DDC ) olarak değiştirdik. Halen yurt içinde ve dışında faaliyetlerimize DDC Ltd. ismi ile devam etmekteyiz.<br><br>

                            Firmamız, yerli ve yabancı tüm müşterilerine her çeşit sondaj katkı maddeleri ve kimyasallarını tedarik etmektedir.
                            2011 yılından itibaren DDC, sadece ürün tedariği değil, aynı zaman da üretim aşamalarında da aktif olarak yer alarak , sektörün ihtiyaçları doğrultusunda ürünler geliştirmeye ve üretmeye başlamıştır.

                            Aynı yıl içerisinde Türkiye’de ilk defa API standartlarında Poly Anionic Cellulose ( PAC ) üretimi başlamıştır. Bu ürünle birlikte Carboxy Methyl Cellulose ( CMC ) ve türevleri üretimi de yapılmaya devam edilmiştir.<br><br>

                            2011 yılı sonlarında sondajlarda kaçak önleyici olarak kullanılan Fındık/Ceviz kabuğu öğütme tesisimiz Mardin’de faaliyete geçmiştir.
                            2012 yılı itibariyle dünyanın en büyük Klor tesislerinden biri olan Dead Sea Works ile bayilik anlaşması yapılmış olup, firmanın sondajlarda yoğunluk kontrolü ve şeyl stabilizatörü olarak kullanılan Potasyum Klorür ürününün Türkiye ve Ortadoğu pazarındaki satış temsilciliği alınmıştır

                        </p>

                    </div>
                </div>

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
            </div>
        </div>
    </section>






{{--    what clien say about us--}}

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
