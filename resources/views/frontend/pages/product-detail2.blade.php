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
    <title>ICS KIMYA MADDELERI</title>

    <!-- favicon -->


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





    <section>
        <div class="container">
            <div class="row mt-n5">
                <!-- Sub Products List -->
                <div class="col-lg-4 mt-5">
                    <div class="pe-xl-5">
                        <div class="bg-dark border-radius-5 p-4 p-xl-1-9 mb-4">
                            <div class="heading-one secondary mb-1-9">
                                <span>Sub products</span>
                            </div>

                            <ul class="side-bar-list list-unstyled m-0">
                                @foreach($subProducts as $subProduct)
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a href="javascript:void(0);" onclick="showProductDetails({{ $subProduct->id }})" id="subProductLink{{ $subProduct->id }}">
                                            {{ $subProduct->translation->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- MSDS and TDS Tabs -->
                <div class="col-lg-8 mt-5">
                    <div class="horizontaltab tab-style1 position-relative z-index-9">
                        <ul class="resp-tabs-list hor_1">
                            <li onclick="showTabContent('msds')">MSDS</li>
                            <li onclick="showTabContent('tds')">TDS</li>
                        </ul>
                        <div class="resp-tabs-container hor_1 p-0">
                            <!-- MSDS Content -->
                            <div id="msdsContent" style="display: none;">
                                <p id="msdsText"></p>
                            </div>
                            <!-- TDS Content -->
                            <div id="tdsContent" style="display: none;">
                                <p id="tdsText"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Server-dən alınan məlumat
        const subProductData = @json($subProducts);
        let selectedSubProductId = null; // Seçilmiş məhsulun ID-si

        // Seçilmiş məhsulun detallarını göstər
        function showProductDetails(productId) {
            const product = subProductData.find(p => p.id === productId);
            if (product) {
                document.getElementById('msdsText').innerHTML = product.msds_text;
                document.getElementById('tdsText').innerHTML = product.tds_text;

                // Əvvəlki seçilmiş linkin üslubunu silin
                if (selectedSubProductId !== null) {
                    const previousLink = document.getElementById('subProductLink' + selectedSubProductId);
                    previousLink.style.color = ''; // Varsayılan rəng
                    previousLink.style.fontWeight = ''; // Varsayılan font ağırlığı
                    previousLink.style.textDecoration = ''; // Varsayılan altı xəttləmə
                }

                // Yeni seçilmiş linkin üslubunu tətbiq edin
                const currentLink = document.getElementById('subProductLink' + productId);
                currentLink.style.fontWeight = 'bold'; // Qalın mətn
                currentLink.style.textDecoration = 'underline'; // Altı xəttləmə
                selectedSubProductId = productId;

                // Varsayılan olaraq MSDS məzmununu göstər
                // showTabContent('msds'); // MSDS tabını açın
            }
        }

        // MSDS və TDS məzmununu göstərmək üçün tabları dəyiş
        function showTabContent(tab) {
            document.getElementById('msdsContent').style.display = tab === 'msds' ? 'block' : 'none';
            document.getElementById('tdsContent').style.display = tab === 'tds' ? 'block' : 'none';
        }

        // Başlanğıcda ilk sub-product seçilməsi üçün bir funksiya əlavə edin
        function initializeDefaultSubProduct() {
            if (subProductData.length > 0) {
                showProductDetails(subProductData[0].id); // İlk məhsulu seçin
            }
        }

        // Sayt yükləndikdə varsayılan sub-productu seçin
        window.onload = initializeDefaultSubProduct;
    </script>

@endsection
