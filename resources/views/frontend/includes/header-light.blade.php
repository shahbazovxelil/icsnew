



<header class="header-style2">

    <div class="top-bar bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="top-bar-info">
                        <ul class="ps-0">
                            <li><i class="ti-mobile"></i>(+123) 456 7890</li>
                            <li class="d-none d-sm-inline-block"><i class="ti-email"></i>ics@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 d-none d-md-block">
                    <ul class="top-social-icon ps-0">
                        <li><a href="index-2.html#!"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index-2.html#!"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index-2.html#!"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="index-2.html#!"><i class="fab fa-linkedin-in"></i></a></li>
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
                                <p class="logo-text"><i>ICS KIMYA MADDELERI LLC</i></p>

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
                                    <li class="search"><a href="index-2.html#!"><i class="fas fa-search"></i></a></li>
                                    <li class="d-none d-xl-inline-block"><a href="contact.html" class="butn-style2 medium text-white"><span>ICS</span></a></li>
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
