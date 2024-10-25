<div class="section-navigation-endBar-minorNavigation-item navigation-item navigation-item sg--dropdown sg--dropdown-small order-lg-2 order-3">
    <a href="#" class="section-navigation-endBar-minorNavigation-item-link navigation-item-link sg--dropdown-toggle">
        <span class="section-navigation-endBar-minorNavigation-item-link--name navigation-item-link--name">{{ucfirst(app()->getLocale())}}</span>
    </a>
    <div class="sg--dropdown-menu">

        @foreach($flanguages as $flanguage)
            @if($flanguage->locale!=app()->getLocale())
        <div class="sg--dropdown-menu-item">
            <a href="{{ route('frontend.switchLanguage', $flanguage->locale) }}" class="sg--dropdown-menu-item-link">
                <span class="sg--dropdown-menu-item-link--name">{{ucfirst($flanguage->locale)}}</span>
            </a>
        </div>
            @endif
        @endforeach
    </div>
</div>
