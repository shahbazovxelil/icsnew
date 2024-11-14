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
                    <h1>Blog Details</h1>
                </div>
                <div class="flex-grow-1">
                    <ul class="text-center text-md-end ps-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog-details.html#!">Blog Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Details
    ================================================== -->
    <section>
        <div class="container">
            <div class="row mt-n5">
                <div class="col-lg-8 mt-5">
                    <div class="row">
                        <div class="col-12 mb-6">
                            <article class="card border-0 shadow border-radius-5">
                                <div class="card-body blog-content p-2-2">
                                    <img src="frontend/img/blog/blog-details-01.jpg" alt="..." class="mb-4 border-radius-5">
                                    <div class="px-xxl-4">
                                        <ul class="list-unstyled mb-2">
                                            <li class="d-inline-block me-4 display-30"><i class="ti-calendar text-secondary display-30 pe-3"></i>25 June, 2023</li>
                                            <li class="d-inline-block"><i class="ti-comments text-secondary display-30 pe-3"></i>3 Comments</li>
                                        </ul>
                                        <h2 class="mb-4">Equipping researchers in the developing world</h2>
                                        <p class="mb-3">We provide you with objective information so that you can map your route to fitness and wellness. Regulatory surroundings can assist aid sponsors.</p>
                                        <p>Chemical research have an more and more more vital area in organic research, and withinside the boundary among chemical and organic research: chemical and organic laboratories are increasingly permeable. There are methods to interpret those observations.</p>
                                        <div class="row mb-5">
                                            <div class="col-md-6 mb-2 mb-md-0">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="mb-2 display-30 display-xl-29"><i class="fa-solid fa-circle-right pe-3 text-primary"></i>Improving health</li>
                                                    <li class="mb-2 display-30 display-xl-29"><i class="fa-solid fa-circle-right pe-3 text-primary"></i>Strict quality practices</li>
                                                    <li class="display-30 display-xl-29"><i class="fa-solid fa-circle-right pe-3 text-primary"></i>Health, wellness and insurance</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="mb-2 display-30 display-xl-29"><i class="fa-solid fa-circle-right pe-3 text-primary"></i>Medical Specialties</li>
                                                    <li class="mb-2 display-30 display-xl-29"><i class="fa-solid fa-circle-right pe-3 text-primary"></i>Highest Quality Results</li>
                                                    <li class="display-30 display-xl-29"><i class="fa-solid fa-circle-right pe-3 text-primary"></i>Affordable Health Packages</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="quote-content position-relative mb-2-2">
                                            <div class="position-relative z-index-9 bg-secondary border-radius-5 p-1-6 p-sm-1-9">
                                                <p class="display-28 display-lg-25 text-white font-weight-400 position-relative">
                                                    <img src="frontend/img/content/right-quote.png" alt="..." class="position-absolute opacity1">
                                                    We are assisting to increase health & assisting any where, any time on your services. We provide you with objective information.
                                                </p>
                                                <small class="display-29 text-primary"><i class="ti-minus me-2"></i>Fethawit Asfaha</small>
                                            </div>
                                        </div>
                                        <p class="mb-2-2">He outstanding classes of researchers inside biology, who deal with one of a kind questions. Functional biologists search for bodily and chemical mechanisms explaining how the complicated macromolecular gadgets found in organisms satisfy their functions. We provide you with objective information so that you can map your route to fitness and wellness. One of the important functions of the science laboratory is the deepening of the scholars know-how.</p>
                                        <div class="row mb-2-2">
                                            <div class="col-4">
                                                <img src="frontend/img/blog/blog-details-02.jpg" alt="..." class="border-radius-5">
                                            </div>
                                            <div class="col-4">
                                                <img src="frontend/img/blog/blog-details-03.jpg" alt="..." class="border-radius-5">
                                            </div>
                                            <div class="col-4">
                                                <img src="frontend/img/blog/blog-details-04.jpg" alt="..." class="border-radius-5">
                                            </div>
                                        </div>
                                        <p class="mb-2-2">Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering with laboratory particle accelerator. That medical principles and alertness are carefully associated with their personal natural environment. We are assisting to increase health & assisting any where, any time on your services.</p>
                                        <div class="blog-social-icon border-top pt-4">
                                            <div class="d-inline-block pe-3 mb-0">Share Now :</div>
                                            <a href="blog-details.html#!" class="me-2"><i class="fab fa-facebook-f"></i></a>
                                            <a href="blog-details.html#!" class="me-2"><i class="fab fa-twitter"></i></a>
                                            <a href="blog-details.html#!" class="me-2"><i class="fab fa-instagram"></i></a>
                                            <a href="blog-details.html#!" class="me-2"><i class="fab fa-youtube"></i></a>
                                            <a href="blog-details.html#!"><i class="fab fa-linkedin-in"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-12 mb-6">
                            <div class="border border-color-light-black border-radius-5 p-1-6 p-sm-1-9 text-center">
                                <div class="d-flex align-items-center justify-content-center mb-3">
                                    <img src="frontend/img/blog/blog-comment-1.jpg" alt="..." class="rounded-circle">
                                    <div class="ps-3 text-start">
                                        <h5 class="mb-1">Feorie Demsas</h5>
                                        <span class="small text-muted">09 Sep <script>
                                                    document.write(new Date().getFullYear())
                                                </script></span>
                                    </div>
                                </div>
                                <p class="mb-0 w-md-80 mx-auto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam .</p>
                            </div>
                        </div>

                        <!-- comment -->
                        <div class="col-12 mb-6">
                            <div class="border border-color-light-black border-radius-5 p-1-6 p-md-1-9 p-xxl-5">
                                <div class="heading-one mb-1-9">
                                    <span><i></i>Comments</span>
                                </div>
                                <div class="mb-5 bg-light border-radius-5 p-1-6 p-md-1-9">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="frontend/img/blog/blog-comment-2.jpg" alt="..." class="rounded-circle">
                                        </div>
                                        <div class="flex-grow-1 ps-4">
                                            <h6><a href="blog-details.html#!">Selam Yemane</a></h6>
                                            <p class="display-30">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <div class="reply">
                                                <a href="blog-details.html#!"><i class="fas fa-reply me-2"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-light border-radius-5 p-1-6 p-md-1-9 ms-1-9 ms-md-10">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="frontend/img/blog/blog-comment-3.jpg" alt="..." class="rounded-circle">
                                        </div>
                                        <div class="flex-grow-1 ps-4">
                                            <h6><a href="blog-details.html#!">Awate Nasih</a></h6>
                                            <p class="display-30">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <div class="reply">
                                                <a href="blog-details.html#!"><i class="fas fa-reply me-2"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end comment-->

                        <div class="col-12">
                            <div class="bg-light border-radius-5 p-1-6 p-md-5">
                                <div class="heading-one mb-1-9">
                                    <span><i></i>Leave a reply</span>
                                </div>

                                <form>
                                    <div class="quform-elements">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="quform-element form-group">
                                                    <label for="name">Your Name <span class="quform-required">*</span></label>
                                                    <div class="quform-input">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="quform-element form-group">
                                                    <label for="email">Your Email <span class="quform-required">*</span></label>
                                                    <div class="quform-input">
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quform-element form-group">
                                            <label for="message">Message <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <textarea id="message" name="reply" rows="6" class="form-control" placeholder="Your Reply"></textarea>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="butn-style2 border-0" type="submit">Post Comment</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
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
                                <img src="frontend/img/avatar/avatar-14.jpg" alt="..." class="rounded-circle mb-3">
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
                                    <img src="frontend/img/blog/blog-thumb1.jpg" alt="..." class="border-radius-5">
                                </div>
                                <div class="flex-grow-1 ps-4">
                                    <span class="display-30 text-white"><i class="ti-calendar text-secondary pe-2"></i>Sep 08</span>
                                    <p class="mb-0 display-30"><a href="blog-details.html#!" class="text-white">Factsheet provides for any problems</a></p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                    <img src="frontend/img/blog/blog-thumb2.jpg" alt="..." class="border-radius-5">
                                </div>
                                <div class="flex-grow-1 ps-4">
                                    <span class="display-30 text-white"><i class="ti-calendar text-secondary pe-2"></i>Sep 06</span>
                                    <p class="mb-0 display-30"><a href="blog-details.html#!" class="text-white">Research and verify of a covid-19 virus</a></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="frontend/img/blog/blog-thumb3.jpg" alt="..." class="border-radius-5">
                                </div>
                                <div class="flex-grow-1 ps-4">
                                    <span class="display-30 text-white"><i class="ti-calendar text-secondary pe-2"></i>Sep 03</span>
                                    <p class="mb-0 display-30"><a href="blog-details.html#!" class="text-white">Don't underestimate tree for medicine</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-radius-5 p-4 p-xl-1-9 mb-4">
                            <div class="heading-one secondary mb-1-9">
                                <span><i></i>Categories</span>
                            </div>
                            <ul class="side-bar-list list-unstyled m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center"><a href="blog-details.html#!">Scientific </a><span>(5)</span></li>
                                <li class="mb-3 d-flex justify-content-between align-items-center"><a href="blog-details.html#!">Chemistry</a><span>(2)</span></li>
                                <li class="mb-3 d-flex justify-content-between align-items-center"><a href="blog-details.html#!">Pathology </a><span>(1)</span></li>
                                <li class="mb-3 d-flex justify-content-between align-items-center"><a href="blog-details.html#!">Gemological </a><span>(3)</span></li>
                                <li class="mb-3 d-flex justify-content-between align-items-center"><a href="blog-details.html#!">Healthcare </a><span>(7)</span></li>
                                <li class="d-flex justify-content-between align-items-center"><a href="blog-details.html#!">Conferences </a><span>(1)</span></li>
                            </ul>
                        </div>
                        <div class="bg-dark border-radius-5 p-4 p-xl-1-9 mb-4">
                            <div class="heading-one secondary mb-1-9">
                                <span><i></i>Tags</span>
                            </div>
                            <div class="blog-tags">
                                <a href="blog-details.html#!">Medicine</a>
                                <a href="blog-details.html#!">Science</a>
                                <a href="blog-details.html#!">Lab</a>
                                <a href="blog-details.html#!">Test</a>
                                <a href="blog-details.html#!">Virus</a>
                                <a href="blog-details.html#!">Health</a>
                                <a href="blog-details.html#!">Pathology</a>
                                <a href="blog-details.html#!">Pharmacy</a>
                                <a href="blog-details.html#!">Chemistry</a>
                            </div>
                        </div>
                        <div class="bg-dark border-radius-5 p-4 p-xl-1-9">
                            <div class="heading-one secondary mb-1-9">
                                <span><i></i>Follow Us</span>
                            </div>
                            <div class="lab-social-link">
                                <a href="blog-details.html#!" class="me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="blog-details.html#!" class="me-2"><i class="fab fa-twitter"></i></a>
                                <a href="blog-details.html#!" class="me-2"><i class="fab fa-instagram"></i></a>
                                <a href="blog-details.html#!" class="me-2"><i class="fab fa-youtube"></i></a>
                                <a href="blog-details.html#!"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
