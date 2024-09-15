new Swiper('.slider-1', {
    navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
    },
    simulateTouch: true,
    loop: true,
    spaceBetween: 16,
    slidesPerView: 1,
    breakpoints: {
        375: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        },
        1660: {
            slidesPerView: 5,
        },
        1920: {
            slidesPerView: 6,
        }
    }
});

new Swiper('.slider-2', {
    navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
    },
    simulateTouch: true,
    loop: true,
    spaceBetween: 16,
    slidesPerView: 1,
    breakpoints: {
        375: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        },
        1660: {
            slidesPerView: 5,
        },
        1920: {
            slidesPerView: 6,
        }
    }
});