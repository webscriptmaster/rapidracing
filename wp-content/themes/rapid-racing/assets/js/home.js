const swiper = new Swiper('.swiper-services', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
  
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1280: {
        slidesPerView: 4,
        spaceBetween: 20
      }
    },
    
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
});

const swiperWitness = new Swiper('.swiper-witness', {
  direction: 'horizontal',
  loop: true,
  slidesPerView: 3,
  
  effect: "coverflow",

  // Pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});