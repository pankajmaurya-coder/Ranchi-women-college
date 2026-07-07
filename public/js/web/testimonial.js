const testimonialSwiper = new Swiper(".testimonialSwiper", {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 30,

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".testimonial-pagination",
        clickable: true,
    },

    navigation: {
        nextEl: ".testimonial-next",
        prevEl: ".testimonial-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        }
    }
});