import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

// konfigurasi responsif swiper
let slidesViewValue = 1;

if (document.getElementById('swiper-perangkat-desa') || document.getElementById('swiper-dokumen')) {
  if (window.innerWidth >= 640) {
    slidesViewValue = 4;
  } else {
    slidesViewValue = 2;  
  }
}
 else {
  slidesViewValue = 1;
}

// event listener pada ikon organisasi
document.querySelectorAll('.icon').forEach((icon) => {
  icon.addEventListener('click', (event) => {
    const clickedIcon = event.currentTarget;
    const slideIndex = parseInt(clickedIcon.getAttribute('slide-index'), 10);

    if (clickedIcon.classList.contains('organization-icon')) {
      swiper.slideTo(slideIndex);
    } else if (clickedIcon.classList.contains('agenda-icon')) {
      swiper.slideTo(slideIndex);
    }

    const swiperWrapper = document.getElementById('swiper-wrapper');
    const slideWidth = swiperWrapper.querySelector('.swiper-slide').offsetWidth;
    const translateX = -(slideWidth * slideIndex);

    swiperWrapper.style.transform = `translateX(${translateX}`;
  })
})

// Initialize Swiper
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    watchOverflow: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    slidesPerView: slidesViewValue,
    spaceBetween: 30
});