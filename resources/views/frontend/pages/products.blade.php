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

    @include('frontend.includes.head-links')

    <style>
        .img-circle {
            border-radius: 50%;
            object-fit: cover;
        }

        .product-image {
            flex-shrink: 0;
            /*background-color:#0ac58f ;*/
            width: 100px; /* İstədiyiniz genişlik */
            height: 100px; /* Eyni hündürlük */
            border-radius: 50%; /* Kürə görünüşü üçün */
        }

        .product-info {
            display: flex;
            flex-direction: column;
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


    @include('frontend.includes.header-light')

    <!-- PAGE TITLE
    ================================================== -->
    <section class="page-title-section bg-img cover-background dark-overlay" data-overlay-dark="7"
             data-background="{{asset('frontend/img/bg/bg-06.png')}}">
        <div class="container">
            <div class="d-md-flex justify-content-between">
                <div class="flex-shrink-0">
                    <h1>Products</h1>
                </div>
                <div class="flex-grow-1">
                    <ul class="text-center text-md-end ps-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="our-team.html#!">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="heading-one text-center mb-1-9">
                <span><i></i>What We Do</span>
                <h2 class="w-md-60 mx-auto">Products</h2>
            </div>
            <br>
            <br>
{{--            <div class="row portfolio-gallery mt-n1-9">--}}
            <div class="row  mt-n1-9">
                    @foreach($products as $product)
                        <div class="col-md-6 col-lg-4 mb-4 d-flex align-items-center" data-src="{{$product->image}}">
                            <div class="product-image">
                                <a href="{{route('frontend.product-detail',$product->id)}}">
                                    <img src="{{$product->image}}" alt="{{$product->title}}" class="img-circle" width="100" height="100" style="background-color: {{$product->image_back_color}}"></a>
                            </div>
                            <div class="product-info ms-3">
                                <h5 class="product-title"><a href="{{route('frontend.product-detail',$product->id)}}">{{ $product->title }}</a></h5>
                                <p class="product-description">{{ $product->description }}</p>
                            </div>
                        </div>
                    @endforeach

            </div>
        </div>
    </section>


@endsection
