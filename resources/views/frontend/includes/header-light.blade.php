<style>


    .language-select-container {
        margin-left: 20px; /* Menü ilə dil seçimi arasında boşluq */
        list-style-type: none; /* Nöqtə işarələrini gizlədir */
    }

    /*.language-select {*/
    /*    border: 2px solid #FF5733; !* Kənar xəttin rəngi *!*/
    /*    border-radius: 4px; !* Künc yumşaqlığı *!*/
    /*    padding: 5px 10px; !* Daxili boşluq *!*/
    /*    background-color: #fff; !* Arxa fon rəngi *!*/
    /*    color: #333; !* Mətn rəngi *!*/
    /*    font-size: 14px; !* Kiçik mətn ölçüsü *!*/
    /*    cursor: pointer; !* Kursoru göstərin *!*/
    /*    transition: all 0.3s ease; !* Animasiya *!*/
    /*    appearance: none; !* Brauzer defolt görünüşünü gizlət *!*/
    /*    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><polygon points="0,0 20,0 10,10" fill="%23FF5733"/></svg>'); !* İkon əlavə edin *!*/
    /*    background-repeat: no-repeat;*/
    /*    background-position: right 10px center; !* İkonun mövqeyi *!*/
    /*    background-size: 20px; !* İkon ölçüsü *!*/
    /*    padding-right: 30px; !* İkon üçün sağda boşluq *!*/
    /*}*/

    .language-select:hover {
        border-color: #FF9A33; /* Hover zamanı kənar xəttin rəngi */
        background-color: #f0f0f0; /* Hover zamanı arxa fon rəngi */
    }

    .language-select option {
        background-color: #fff; /* Seçimlərin arxa fonu */
        color: #333; /* Seçimlərin mətn rəngi */
    }

</style>

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
        <div class="top-search bg-primary">
            <div class="container">
                <form class="search-form" action="https://biology.websitelayout.net/search.html" method="GET" accept-charset="utf-8">
                    <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                        <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div>
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
{{--                                    <li class="search"><a href="index-2.html#!"><i class="fas fa-search"></i></a></li>--}}
                                    <li class="d-none d-xl-inline-block"><a href="#" class="butn-style2 medium text-white"><span>ICS</span></a></li>
                                </ul>
                            </div>
{{--                            @include('frontend.includes.langSwitcher')--}}
                            <!-- end attribute navigation -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
