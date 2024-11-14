/*-----------------------------------------------------------------------------------

    Theme Name: Biology - Laboratory and Research Template
    Description: Laboratory and Research Template
    Author: Chitrakoot Web
    Version: 1.0

    ---------------------------------- */

!function(t){"use strict";var s=t(window);function a(){var e,a;e=t(".full-screen"),a=s.height(),e.css("min-height",a),e=t("header").height(),a=t(".screen-height"),e=s.height()-e,a.css("height",e)}t("#preloader").fadeOut("normall",function(){t(this).remove()}),t.scrollIt({upKey:38,downKey:40,easing:"swing",scrollTime:600,activeClass:"active",onPageChange:null,topOffset:-70}),s.on("scroll",function(){var e=s.scrollTop(),a=t(".navbar-brand img"),o=t(".navbar-brand.logodefault img");e<=50?(t("header").removeClass("scrollHeader").addClass("fixedHeader"),a.attr("src","frontend/img/logos/logo-inner.png")):(t("header").removeClass("fixedHeader").addClass("scrollHeader"),a.attr("src","frontend/img/logos/logo-ch.png")),o.attr("src","frontend/img/logos/logo-ch.png")}),s.on("scroll",function(){500<t(this).scrollTop()?t(".scroll-to-top").fadeIn(400):t(".scroll-to-top").fadeOut(400)}),t(".scroll-to-top").on("click",function(e){e.preventDefault(),t("html, body").animate({scrollTop:0},600)}),s.on("scroll",function(){var e=s.scrollTop(),a=t(".onepage-nav.navbar");100<e?a.addClass("nav-scroll"):a.removeClass("nav-scroll")}),s.width()<=991&&t(".onepage-nav .navbar-nav .nav-link").on("click",function(){t(".onepage-nav .navbar-nav").removeClass("open").hide(),t(".onepage-nav .navbar-toggler").removeClass("menu-opened")}),t("#sidebar_toggle").length&&(t("body").addClass("sidebar-menu"),t("#sidebar_toggle").on("click",function(){t(".sidebar-menu").toggleClass("active"),t(".side-menu").addClass("side-menu-active"),t("#close_sidebar").fadeIn(700)}),t("#close_sidebar").on("click",function(){t(".side-menu").removeClass("side-menu-active"),t(this).fadeOut(200),t(".sidebar-menu").removeClass("active")}),t("#btn_sidebar_colse").on("click",function(){t(".side-menu").removeClass("side-menu-active"),t("#close_sidebar").fadeOut(200),t(".sidebar-menu").removeClass("active")})),t(".parallax,.bg-img").each(function(e){t(this).attr("data-background")&&t(this).css("background-image","url("+t(this).data("background")+")")}),t(".story-video").magnificPopup({delegate:".video",type:"iframe"}),t(".popup-social-video").magnificPopup({disableOn:700,type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1}),t(".source-modal").magnificPopup({type:"inline",mainClass:"mfp-fade",removalDelay:160}),s.resize(function(e){setTimeout(function(){a()},500),e.preventDefault()}),0!==t(".copy-clipboard").length&&(new ClipboardJS(".copy-clipboard"),t(".copy-clipboard").on("click",function(){var e=t(this);e.text();e.text("Copied"),setTimeout(function(){e.text("Copy")},2e3)})),a(),t(document).ready(function(){t(".testimonial-carousel").owlCarousel({loop:!0,responsiveClass:!0,nav:!1,dots:!0,autoplay:!0,autoplayTimeout:5e3,margin:35,smartSpeed:1500,responsive:{0:{items:1,dots:!1},576:{items:1,dots:!1},992:{items:2},1024:{items:2}}}),t(".testimonial-carousel2").owlCarousel({loop:!0,responsiveClass:!0,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:5e3,margin:35,smartSpeed:1500,responsive:{0:{items:1},576:{items:1},992:{items:1},1024:{items:1}}}),t(".portfolio-carousel").owlCarousel({loop:!0,responsiveClass:!0,nav:!0,dots:!1,autoplay:!0,autoplayTimeout:5e3,navText:["<i class='ti-arrow-left'></i>","<i class='ti-arrow-right'></i>"],margin:35,smartSpeed:1500,responsive:{0:{items:1,nav:!1},576:{items:3,margin:20,nav:!1},992:{items:3},1024:{items:4}}}),t(".portfolio-detail-carousel").owlCarousel({loop:!0,responsiveClass:!0,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:5e3,margin:35,smartSpeed:1500,responsive:{0:{items:1},576:{items:2,margin:20},992:{items:3},1024:{items:3}}}),t(".client-carousel").owlCarousel({loop:!0,responsiveClass:!0,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:5e3,margin:35,smartSpeed:1500,responsive:{0:{items:2},576:{items:3},992:{items:4},1024:{items:5}}}),t(".slider-fade1 .owl-carousel").owlCarousel({items:1,loop:!0,dots:!0,nav:!1,navText:["<i class='ti-arrow-left'></i>","<i class='ti-arrow-right'></i>"],margin:0,autoplay:!0,smartSpeed:1500,mouseDrag:!1,animateIn:"fadeIn",animateOut:"fadeOut",responsive:{768:{nav:!1},992:{nav:!0}}}),t(".owl-carousel").owlCarousel({items:1,loop:!0,dots:!1,margin:0,autoplay:!0,smartSpeed:1500}),t(".slider-fade1").on("changed.owl.carousel",function(e){e=e.item.index-2;t("span").removeClass("animated fadeInUp"),t("h1").removeClass("animated fadeInUp"),t(".butn").removeClass("animated fadeInUp"),t(".owl-item").not(".cloned").eq(e).find("span").addClass("animated fadeInUp"),t(".owl-item").not(".cloned").eq(e).find("h1").addClass("animated fadeInUp"),t(".owl-item").not(".cloned").eq(e).find(".butn").addClass("animated fadeInUp")}),0!==t(".horizontaltab").length&&t(".horizontaltab").easyResponsiveTabs({type:"default",width:"auto",fit:!0,tabidentify:"hor_1",activate:function(e){var a=t(this),o=t("#nested-tabInfo");t("span",o).text(a.text()),o.show()}}),t(".countup").counterUp({delay:25,time:2e3}),t(".countdown").countdown({date:"01 Mar 2026 00:01:00",format:"on"}),t(".current-year").text((new Date).getFullYear())}),s.on("load",function(){t(".portfolio-gallery").lightGallery(),t(".portfolio-link").on("click",e=>{e.stopPropagation()})})}(jQuery);



!function(t) {
    "use strict";
    var s = t(window);

    // Digər kodlar

    s.on("scroll", function() {
        var e = s.scrollTop(),
            a = t(".navbar-brand img"),
            o = t(".navbar-brand.logodefault img");

        if (e <= 50) {
            t("header").removeClass("scrollHeader").addClass("fixedHeader");
            a.attr("src", window.location.origin + "/frontend/img/logos/logo-inner.png");
        } else {
            t("header").removeClass("fixedHeader").addClass("scrollHeader");
            a.attr("src", window.location.origin + "/frontend/img/logos/logo-ch.png");
        }
        o.attr("src", window.location.origin + "/frontend/img/logos/logo-ch.png");
    });

    // Digər kodlar

}(jQuery);
