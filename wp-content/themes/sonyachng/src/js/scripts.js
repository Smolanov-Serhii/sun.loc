$(document).ready(function () {

    // $('html, body').stop().animate({
    //     scrollTop: $('#rev').offset().top - 200
    // }, 0);
    // AOS.init({
    //     // Global settings:
    //     disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    //     startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    //     initClassName: 'aos-init', // class applied after initialization
    //     animatedClassName: 'aos-animate', // class applied on animation
    //     useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    //     disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    //     debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    //     throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    //     // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    //     offset: 50, // offset (in px) from the original trigger point
    //     delay: 0, // values from 0 to 3000, with step 50ms
    //     duration: 1000, // values from 0 to 3000, with step 50ms
    //     easing: 'ease', // default easing for AOS animations
    //     once: false, // whether animation should happen only once - while scrolling down
    //     mirror: false, // whether elements should animate out while scrolling past them
    //     anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    //
    // });

    if ($(".header__popup").length) {
        document.addEventListener('wpcf7mailsent', function (event) {
            $('.header__popup').fadeIn(300);
        }, false);
        $(".header__popup-close").on("click", function () {
            $('.header__popup').fadeOut(300);
        });
    }
    ;

    $(".header__burger").click(function () {
        $('.header').toggleClass('burger');
        $(this).toggleClass('active');
        $('.header__wrapper').toggleClass('active');
        $('body').toggleClass('locked');
    });
    $(".header__nav-close").click(function () {
        $('.header__wrapper').removeClass('active');
        $('.header__burger').removeClass('active');
        $('.header').removeClass('burger');
        $('body').removeClass('locked');
    });
    const div = document.querySelector('.header');

    document.addEventListener('click', (e) => {
        const withinBoundaries = e.composedPath().includes(div);
        if (!withinBoundaries) {
            $('.header__wrapper').removeClass('active');
            $('.header').removeClass('burger');
            $('body').removeClass('locked');
        }
    })


    function GalSlider() {
        var GalSlider = new Swiper(".bannermain .swiper-container", {
            slidesPerView: 3.5,
            spaceBetween: 30,
            loop: true,
            centeredSlides: false,
            allowTouchMove: false,
            speed: 5000,
            autoplay: {
                delay: 1,
                disableOnInteraction: true
            },
            breakpoints: {
                '320': {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                '768': {
                    slidesPerView: 3.5,
                    spaceBetween: 20,
                },
                '1024': {
                    slidesPerView: 3.5,
                },
            },
        });
    }

    if ($('.bannermain').length) {
        GalSlider();
    }

    function PopupInit() {
        document.addEventListener('wpcf7mailsent', function (event) {
            $('.popup-zapis').fadeOut(300);
            $('.call-back').fadeOut(300);
            $('#success-send').fadeIn(300);
            $('.wpcf7-response-output').empty();
            setTimeout(function () {
                $('#success-send').fadeOut(300);
                $('body').removeClass('locked');
            }, 2000);

        }, false);
        $(".js-get").click(function () {
            $('body').addClass('locked');
            $('.popup-zapis').fadeIn(300);
        });
        $(".popup-zapis__close").click(function () {
            $('body').removeClass('locked');
            $('.call-back').fadeOut(300);
            $('.popup-zapis').fadeOut(300);
        });

        const div = document.querySelector('.header');

        document.addEventListener('click', (e) => {
            const withinBoundaries = e.composedPath().includes(div);

            if (!withinBoundaries) {
                $('.js-burger').removeClass('active');
                $('.header').removeClass('clicked');
                $('.header__burger').removeClass('active');
                $('.header__mobile').fadeOut(300);
            }
        })
    }

    PopupInit();

});

