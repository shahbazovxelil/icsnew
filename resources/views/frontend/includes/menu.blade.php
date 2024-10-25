{{--<ul class="navbar-nav ms-auto" id="nav" style="display: none;">--}}
{{--    @foreach ($menus as $menu)--}}
{{--        <li>--}}
{{--            <a href="{{ route($menu->route) }}">--}}
{{--                {{ optional($menu->translations->first())->name ?? 'Menu Item' }}--}}
{{--            </a>--}}
{{--            @if ($menu->children->isNotEmpty())--}}
{{--                <ul>--}}
{{--                    @foreach ($menu->children as $child)--}}
{{--                        <li>--}}
{{--                            <a href="{{ route($child->route) }}">--}}
{{--                                {{ optional($child->translations->first())->name ?? 'Submenu Item' }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            @endif--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}




<ul class="navbar-nav ms-auto" id="nav" style="display: none;">
    <li><a href="{{route('frontend.index')}}">Home</a>
    <li><a href="{{route('frontend.service')}}">Services</a>
    <li><a href="{{route('frontend.products')}}">Products</a>
    <li><a href="{{route('frontend.faq')}}">Faq</a>
    <li><a href="{{route('frontend.contact-us')}}">Contact</a>
    <li><a href="{{route('frontend.about')}}">About</a>
    <li><a href="{{route('frontend.news')}}">News</a></li>


{{--    <li><a href="index-2.html#!">Services</a>--}}
{{--        <ul>--}}
{{--            <li><a href="services.html">Services</a></li>--}}
{{--            <li><a href="chemical-research.html">Chemical Research</a></li>--}}
{{--        </ul>--}}
{{--    </li>--}}
</ul>


