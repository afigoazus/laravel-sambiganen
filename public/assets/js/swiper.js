import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

let slidesViewValue = 1;

if (document.getElementById('swiper-perangkat-desa') || document.getElementById('swiper-dokumen')) {
  slidesViewValue = 2;
} else {
  slidesViewValue = 1;
}

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    slidesPerView: slidesViewValue,
    spaceBetween: 30
});