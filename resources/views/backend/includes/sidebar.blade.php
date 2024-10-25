<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{route('backend.dashboard')}}" class="logo text-center logo-light">
                    <span class="logo-lg">
                <a href="{{route('backend.dashboard')}}"><img width="200px" height="80px" src="{{asset('frontend/img/logos/logo-ch.png')}}" alt="logo"></a>
                    </span>
{{--        <span class="logo-sm">--}}
{{--                        <img src="assets/images/logo_sm.png" alt="" height="16">--}}
{{--                    </span>--}}
    </a>

    <!-- LOGO -->
{{--    <a href="" class="logo text-center logo-dark">--}}
{{--                    <span class="logo-lg">--}}
{{--                        <img src="assets/images/logo-dark.png" alt="" height="16">--}}
{{--                    </span>--}}
{{--        <span class="logo-sm">--}}
{{--                        <img src=" {{asset('backend/images/logo_sm_dark.png')}}" alt="" height="16">--}}

{{--                    </span>--}}
{{--    </a>--}}

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">


            <li class="side-nav-item">
                <a href="{{route('backend.categories.index')}}" class="side-nav-link">
                    <i class="uil uil-bars"></i>
                    <span>Kategoriyalar</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('backend.settings.index')}}" class="side-nav-link">
                    <i class="uil uil-cog"></i>
                    <span>Ayarlar</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('backend.dt_c_banners.index')}}" class="side-nav-link">
                    <i class="uil uil-cog"></i>
                    <span>DT Konsaltinq</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('backend.co_it_banners.index')}}" class="side-nav-link">
                    <i class="uil uil-cog"></i>
                    <span>Course item banner</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('backend.services.index')}}" class="side-nav-link">
                    <i class="uil uil-cog"></i>
                    <span>Xidmətlər</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('backend.products.index')}}" class="side-nav-link">
                    <i class="uil uil-cog"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('backend.main_banners.index')}}" class="side-nav-link">
                    <i class="uil uil-cog"></i>
                    <span>Əsas Səhifə Banneri</span>
                </a>
            </li>
{{--            <li class="side-nav-item">--}}
{{--                <a href="{{route('backend.socials.index')}}" class="side-nav-link">--}}
{{--                    <i class="uil uil-instagram-alt"></i>--}}
{{--                    <span>Sosial şəbəkələr</span>--}}
{{--                </a>--}}
{{--            </li>--}}


            <li class="side-nav-item sg--dropdown sg--dropdown--relative">
                <a href="#" class="side-nav-link sg--dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="uil uil-user"></i>
                    <span>Mentorlar</span>
                </a>
                <div class="sg--dropdown-menu">
                    <div class="sg--dropdown-menu-item">
                        <a class="sg--dropdown-menu-item--link" href="{{route('backend.mentors.index')}}"> Mentors list</a>
                    </div>
                    <div class="sg--dropdown-menu-item">
                        <a class="sg--dropdown-menu-item--link" href="{{route('backend.mentor_experiences.index')}}"> Mentor təcrübə</a>
                    </div>
                </div>
            </li>
            <li class="side-nav-item sg--dropdown sg--dropdown--relative">
                <a href="#" class="side-nav-link sg--dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="uil uil-user"></i>
                    <span>Kurslar</span>
                </a>
                <div class="sg--dropdown-menu">
                    <div class="sg--dropdown-menu-item">
                        <a class="sg--dropdown-menu-item--link" href="{{route('backend.courses.index')}}"> Kurs list</a>
                    </div>
                    <div class="sg--dropdown-menu-item">
                        <a class="sg--dropdown-menu-item--link" href="{{route('backend.what_learns.index')}}"> Course what you learn</a>
                    </div>
                    <div class="sg--dropdown-menu-item">
                        <a class="sg--dropdown-menu-item--link" href="{{route('backend.structures.index')}}"> Kurs strukturu</a>

                    </div>
                    <div class="sg--dropdown-menu-item">
                        <a class="sg--dropdown-menu-item--link" href="{{route('backend.course_mentor.index')}}"> Kurs mentorları</a>

                    </div>
                    <div class="sg--dropdown-menu-item">
                        <a class="sg--dropdown-menu-item--link" href="{{route('backend.benefits.index')}}"> Kursun faydaları</a>

                    </div>
                </div>
            </li>
        </ul>



    </div>
    <!-- Sidebar -left -->

</div>
