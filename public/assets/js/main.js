(function ($) {
    "use strict";

    /* 1. Proloder */
    $(window).on("load", function () {
        $("#preloader-active").delay(450).fadeOut("slow");
        $("body").delay(450).css({
            overflow: "visible",
        });
    });

    /* 2. sticky And Scroll UP */
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $(".header-sticky").removeClass("sticky-bar");
            $("#back-top").fadeOut(500);
        } else {
            $(".header-sticky").addClass("sticky-bar");
            $("#back-top").fadeIn(500);
        }
    });
    // Scroll Up
    $("#back-top a").on("click", function () {
        $("body,html").animate(
            {
                scrollTop: 0,
            },
            800,
        );
        return false;
    });

    /* 3. slick Nav */
    // mobile_menu
    var menu = $("ul#navigation");
    if (menu.length) {
        menu.slicknav({
            prependTo: ".mobile_menu",
            closedSymbol: "+",
            openedSymbol: "-",
        });
    }
    
    function doAnimations(elements) {
        var animationEndEvents =
            "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
        elements.each(function () {
            var $this = $(this);
            var $animationDelay = $this.data("delay");
            var $animationType = "animated " + $this.data("animation");
            $this.css({
                "animation-delay": $animationDelay,
                "-webkit-animation-delay": $animationDelay,
            });
            $this.addClass($animationType).one(animationEndEvents, function () {
                $this.removeClass($animationType);
            });
        });
    }
    /* 5. Testimonial Active*/
    var testimonial = $(".h1-testimonial-active");
    if (testimonial.length) {
        testimonial.slick({
            dots: false,
            infinite: true,
            speed: 1000,
            autoplay: false,
            arrows: true,
            prevArrow:
                '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
            nextArrow:
                '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        arrow: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        arrow: false,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        arrow: false,
                    },
                },
            ],
        });
    }

    /* 6. Nice Selectorp  */
    // var nice_Select = $('select');
    //   if(nice_Select.length){
    //     nice_Select.niceSelect();
    //   }

    /* 7. data-background */
    $("[data-background]").each(function () {
        $(this).css(
            "background-image",
            "url(" + $(this).attr("data-background") + ")",
        );
    });

    /* 10. WOW active */
    new WOW().init();

    // 11. ---- Mailchimp js --------//
    function mailChimp() {
        $("#mc_embed_signup").find("form").ajaxChimp();
    }
    mailChimp();

    // 12 Pop Up Img
    var popUp = $(".single_gallery_part, .img-pop-up");
    if (popUp.length) {
        popUp.magnificPopup({
            type: "image",
            gallery: {
                enabled: true,
            },
        });
    }
})(jQuery);
// Location dropdown search
document.addEventListener("DOMContentLoaded", function () {
    window.filterLocation = function () {
        let input = document.getElementById("locationSearch");
        if (!input) return;

        let value = input.value.toLowerCase();
        let items = document.getElementsByClassName("location-item");

        for (let i = 0; i < items.length; i++) {
            let text = items[i].innerText.toLowerCase();
            items[i].style.display = text.includes(value) ? "" : "none";
        }
    };

    window.selectLocation = function (element) {
        let id = element.getAttribute("data-id");
        let name = element.innerText;

        let hiddenInput = document.getElementById("locationInput");
        let dropdownBtn = document.getElementById("locationDropdown");

        if (hiddenInput) hiddenInput.value = id;
        if (dropdownBtn) dropdownBtn.innerText = name;
    };
});
