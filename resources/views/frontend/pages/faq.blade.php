@extends('frontend.layouts.app')


@section('content')

    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- metas -->
    <meta charset="utf-8"/>
    <meta name="author" content="Chitrakoot Web"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="keywords" content="ICS Kimya"/>
    <meta name="description" content="ICS Kimya"/>

    <!-- title  -->
    <title>ICS Kimya</title>


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
                    <h1>FAQ</h1>
                </div>
                <div class="flex-grow-1">
                    <ul class="text-center text-md-end ps-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="faq.html#!">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ'S
    ================================================== -->
    <section>
        <div class="container">
            <div class="heading-one text-center mb-1-9">
                <span><i></i>Faq's</span>
                <h2 class="w-md-60 mx-auto">Chemical Questions</h2>
            </div>
            <div class="row align-items-center mt-n4">
                <div class="col-lg-4 mt-4">
                    <div class="text-center text-lg-start">
                        <img src="frontend/img/content/faq2.jpg" height="200px" width="200px" alt="...">
                        <img src="frontend/img/content/faq.jfif" alt="...">

                    </div>
                </div>
                <div class="col-lg-8 mt-4">
                    <div>
                        <div id="accordion" class="accordion-style1">
                            <div class="card mb-4">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0 main-font">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">01. What are research facility tests ?</button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="card-body position-relative">Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering with laboratory particle accelerator
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0 main-font">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">02. How might I at any point manage The Laboratory ?</button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                    <div class="card-body position-relative">
                                        Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering with laboratory particle accelerator
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0 main-font">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">03. How safe is research ?</button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="card-body position-relative">
                                        Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering with laboratory particle accelerator
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0 main-font">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">04. Where might I at any point go to give an example to testing ?</button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                    <div class="card-body position-relative">
                                        Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering with laboratory particle accelerator
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0 main-font">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">05. What will research facility testing set me back ?</button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
                                    <div class="card-body position-relative">
                                        Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering with laboratory particle accelerator
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
