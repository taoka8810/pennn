const swiper = new Swiper(".article-swiper", {
  loop: true,
  loopAdditionalSlides: 1,
  autoplay: {
    delay: 10000,
    speed: 10,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".article-swiper-button-next",
    prevEl: ".article-swiper-button-prev",
  },
  breakpoints: {
    841: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
    450: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    0: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
  },
});
