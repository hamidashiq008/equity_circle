if ($('.new-music').length > 0) {
    const options = {
        centeredSlides: false,
        loop: false,
        slidesPerView: 5,
        autoplay: {
            delay: 3000
        },
        spaceBetween: 15,
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            550: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            1199: {
                slidesPerView: 4
            },
            1400: {
                slidesPerView: 5
            }
        },
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar'
        }
    }
    let swiper = new Swiper('.new-music',options);

    document.addEventListener('ChangeRtl', (e) => {
        swiper.destroy(true, true)
        setTimeout(() => {
            swiper = new Swiper('.new-music',options);
        }, 500);
    })
}
if ($('.recent-music').length > 0) {
    const options = {
        centeredSlides: false,
        loop: false,
        slidesPerView: 5,
        autoplay: {
            delay: 3000
        },
        spaceBetween: 15,
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            550: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            1199: {
                slidesPerView: 4
            },
            1400: {
                slidesPerView: 5
            }
        },
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar'
        }
    }
    let swiper = new Swiper('.recent-music',options);

    document.addEventListener('ChangeRtl', (e) => {
        swiper.destroy(true, true)
        setTimeout(() => {
            swiper = new Swiper('.recent-music',options);
        }, 500);
    })
}
if ($('.top-music').length > 0) {
    const options = {
        centeredSlides: false,
        loop: false,
        slidesPerView: 5,
        autoplay: {
            delay: 3000
        },
        spaceBetween: 15,
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            550: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            1199: {
                slidesPerView: 4
            },
            1400: {
                slidesPerView: 5
            }
        },
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar'
        }
    }
    let swiper = new Swiper('.top-music',options);

    document.addEventListener('ChangeRtl', (e) => {
        swiper.destroy(true, true)
        setTimeout(() => {
            swiper = new Swiper('.top-music',options);
        }, 500);
    })
}
if ($('.sign-slider').length > 0) {
    const options = {
        centeredSlides: false,
        loop: false,
        slidesPerView: 1,
        autoplay: {
            delay: 3000
        },
        spaceBetween: 15,
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar'
        }
    }
    let swiper = new Swiper('.sign-slider',options);

    document.addEventListener('ChangeRtl', (e) => {
        swiper.destroy(true, true)
        setTimeout(() => {
            swiper = new Swiper('.sign-slider',options);
        }, 500);
    })
}


(function (jQuery) {
    "use strict";

    callGeneralSwiper();

})(jQuery);

function callGeneralSwiper() {
    jQuery(document).find('.swiper.swiper-general').each(function () {
        let slider = jQuery(this);

        var sliderAutoplay = slider.data('autoplay');

        var breakpoint = {
            // when window width is >= 0px
            0: {
                slidesPerView: slider.data('mobile-sm')
            },
            576: {
                slidesPerView: slider.data('mobile')
            },
            // when window width is >= 768px
            768: {
                slidesPerView: slider.data('tab')
            },
            // when window width is >= 1025px
            1025: {
                slidesPerView: slider.data('laptop')
            },
            // when window width is >= 1500px
            1500: {
                slidesPerView: slider.data('slide')
            },
        }

        if (slider.data('navigation')) {
            var navigationVal = {
                nextEl: slider.find('.swiper-button-next')[0],
                prevEl: slider.find('.swiper-button-prev')[0],
            };
        } else {
            var navigationVal = false;
        }

        if (slider.data('pagination')) {
            var paginationVal = {
                el: slider.find(".swiper-pagination")[0],
                dynamicBullets: true,
                clickable: true,
            };
        } else {
            var paginationVal = false;
        }
        var sw_config = {
            loop: slider.data('loop'),
            speed: 1000,
            spaceBetween: slider.data('space'),
            slidesPerView: slider.data('slide'),
            centeredSlides: slider.data('center'),
            mousewheel: slider.data('mousewheel'),
            autoplay: sliderAutoplay,
            effect: slider.data('effect'),
            navigation: navigationVal,
            pagination: paginationVal,
            breakpoints: breakpoint,
        };
        var swiper = new Swiper(slider[0], sw_config);

        document.addEventListener("theme_scheme_direction", (e) => {
            swiper.destroy(true, true);
            setTimeout(() => {
                swiper = new Swiper(slider[0], sw_config);
            }, 500);
        });
    });
}
