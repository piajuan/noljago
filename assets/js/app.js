var plugins = (function () {

    // Header style on scroll
    const headerOnScroll = function () {
        var header = $(".header--fixed");
    
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 50) {
                header.removeClass('header--fixed').addClass("header--onScroll");
            } else {
                header.removeClass("header--onScroll").addClass('header--fixed');
            }
        });
    };


    // Sidebar menu for mobile
    const sidebar = function () {
        // SIDE BAR
        var $lateral_menu_trigger = $("#nj-menu-trigger"),
            $content_wrapper = $(".nj-main-content"),
            $footer_wrapper = $(".nj-footer"),
            $nj_lateral_nav = $("#nj-lateral-nav"),
            $navigation = $("header");

        var lateralMenu = [
            $navigation,
            $nj_lateral_nav,
            $content_wrapper,
            $footer_wrapper
        ];
        var contents = [$content_wrapper, $footer_wrapper];

        // Side Bar Navigation for mobile
        //open-close lateral menu clicking on the menu icon
        $lateral_menu_trigger.on("click", function (event) {
            event.preventDefault();

            $lateral_menu_trigger.toggleClass("is-clicked");
            lateralMenu.forEach(function (element) {
                element.toggleClass("lateral-menu-is-open");
            });

            //        $navigation.toggleClass('lateral-menu-is-open');
            //        $('#nj-lateral-nav').toggleClass('lateral-menu-is-open');
            contents.forEach(function (element) {
                element.one(
                    "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                    function () {
                        // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
                        $("body").toggleClass("overflow-hidden");
                    }
                );
            });

            //check if transitions are not supported - i.e. in IE9
            if ($("html").hasClass("no-csstransitions")) {
                $("body").toggleClass("overflow-hidden");
            }
        });

        $(".mobile-signin").on("click", function (event) {
            $lateral_menu_trigger.removeClass("is-clicked");
            $navigation.removeClass("lateral-menu-is-open");
            $content_wrapper
                .removeClass("lateral-menu-is-open")
                .one(
                    "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                    function () {
                        $("body").removeClass("overflow-hidden");
                    }
                );
            $footer_wrapper
                .removeClass("lateral-menu-is-open")
                .one(
                    "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                    function () {
                        $("body").removeClass("overflow-hidden");
                    }
                );
            $("#nj-lateral-nav").removeClass("lateral-menu-is-open");
            //check if transitions are not supported
            if ($("html").hasClass("no-csstransitions")) {
                $("body").removeClass("overflow-hidden");
            }
        });

        //close lateral menu clicking outside the menu itself
        $content_wrapper.on("click", function (event) {
            if (
                !$(event.target).is("#nj-menu-trigger, #nj-menu-trigger span")
            ) {
                $lateral_menu_trigger.removeClass("is-clicked");
                $navigation.removeClass("lateral-menu-is-open");
                $content_wrapper
                    .removeClass("lateral-menu-is-open")
                    .one(
                        "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                        function () {
                            $("body").removeClass("overflow-hidden");
                        }
                    );
                $footer_wrapper
                    .removeClass("lateral-menu-is-open")
                    .one(
                        "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                        function () {
                            $("body").removeClass("overflow-hidden");
                        }
                    );
                $("#nj-lateral-nav").removeClass("lateral-menu-is-open");
                //check if transitions are not supported
                if ($("html").hasClass("no-csstransitions")) {
                    $("body").removeClass("overflow-hidden");
                }
            }
        });

        //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
        $(".item-has-children")
            .children("a")
            .on("click", function (event) {
                event.preventDefault();
                $(this)
                    .toggleClass("submenu-open")
                    .next(".sub-menu")
                    .slideToggle(200)
                    .end()
                    .parent(".item-has-children")
                    .siblings(".item-has-children")
                    .children("a")
                    .removeClass("submenu-open")
                    .next(".sub-menu")
                    .slideUp(200);
            });


        //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
        $(".item__arrow")
            .on("click", function () {
                $(this)
                    .toggleClass("submenu-open-inner")
                    .next(".sub-menu-inner")
                    .slideToggle(200)
                    .end()
                    .parent(".item-has-children-submenu")
                    .siblings(".item-has-children-submenu")
                    .removeClass("submenu-open-inner")
                    .next(".sub-menu-inner")
                    .slideUp(200);


            });
    };


    // Hero Swiper
    const heroSwiper = function() {
        var swiper = new Swiper(".nj-hero-carousel .swiper", {
            pagination: {
              el: ".nj-hero-carousel .swiper-pagination",
            },
        });
    };

    function initialize() {
        headerOnScroll();
        sidebar();
        heroSwiper();
    }

    return {
        init: initialize()
    };

})();

$(document).ready(function () {
    plugins.init;
});