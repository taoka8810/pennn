const swiper = new Swiper(".article-swiper", {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 2,
  navigation: {
    nextEl: ".article-swiper-button-next",
    prevEl: ".article-swiper-button-prev",
  },
  breakpoints: {
    1050: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
    560: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});
