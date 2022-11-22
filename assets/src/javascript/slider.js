
const swiper3 = new Swiper(".slider-3", {
  autoHeight: true,
  effect: "coverflow",
  grabCursor: true,
  loop: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 40,
    stretch: 0,
    depth: 100,
    modifier: 5,
    slideShadows: true,
  },
  navigation: {
    nextEl: ".custom-next",
    prevEl: ".custom-prev",
  },
  pagination: {
    el: ".custom-pagination",
  },
});
