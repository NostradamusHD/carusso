import Swiper from 'swiper'

const slideHome = new Swiper('#slider-main',{
  autoplay: {
    delay: 3000
  },
  loop:true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '#slider-main-right',
    prevEl: '#slider-main-left',
  },
});

const slideProducts = new Swiper('#slider-products',{
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '#slider-products-right',
    prevEl: '#slider-products-left',
  },
  breakpoints: {
    570: {
      slidesPerView: 2,
      slidesPerGroup: 2,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 40,
      slidesPerGroup: 4,

    }
  }
});

const slideInstagram = new Swiper('#slider-instagram',{
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '#slider-instagram-right',
    prevEl: '#slider-instagram-left',
  },
  breakpoints: {
    570: {
      slidesPerView: 2,
      slidesPerGroup: 2,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 10,
      slidesPerGroup: 4,

    }
  }
});


