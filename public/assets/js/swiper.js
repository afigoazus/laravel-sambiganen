import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

document.addEventListener("DOMContentLoaded", function() {
  // Konfigurasi responsif Swiper
  var slidesViewValue = 1;
  var slidesViewValueIconLembaga = 1;

  var centeredSlidesIcon = false

  if (document.getElementById('swiper-perangkat-desa') || document.getElementById('swiper-dokumen') || document.getElementById('swiper-surat')) {
    slidesViewValue = window.innerWidth >= 640 ? 4 : 2;
  } else if (document.getElementById('swiper-logo-lembaga')) {
    slidesViewValueIconLembaga = window.innerWidth >= 640 ? 3 : 1;
    centeredSlidesIcon = window.innerWidth >= 640 ? true : false
  } else {
    slidesViewValue = 1;
  }

  function getSlideIndexFromUrl() {
    const params = new URLSearchParams(window.location.search);
    return params.has('slide') ? parseInt(params.get('slide')) : 0;
  }

  const initialIndex = getSlideIndexFromUrl();

  // inisialisasi swiper utama
  window.swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: false,
    watchOverflow: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    slidesPerView: slidesViewValue,
    spaceBetween: 30,
    on: {
      slideChange: function() {
        if (window.swiper_icon && typeof window.swiper_icon.slideTo === "function") {
          let maxIndex = window.swiper_icon.slides.length -1;
          let newIndex = Math.min(this.realIndex, maxIndex);
          window.swiper_icon.slideTo(newIndex);
        } 
      },
      
      init: function() {
        console.log("swiper utama masih dimuat dengan index ", initialIndex);
        setTimeout(() => {
          this.slideTo(initialIndex);
        }, 50);
      }
    }
  });

 
  // inisialisasi swiper ikon
  window.swiper_icon = new Swiper('.swiper-icon', {
    direction: 'horizontal',
    loop: false,
    watchOverflow: true,
    centeredSlides: centeredSlidesIcon,
    slideToClickedSlide: true,
    slidesPerView: slidesViewValueIconLembaga,
    spaceBetween: 30,
    on: {
      transitionEnd: function() {
        document.querySelectorAll(".swiper-slide .icon").forEach(icon => {
          icon.classList.remove("scale-100");
          icon.classList.add("scale-75");
        });

        const activeSlide = document.querySelector(".swiper-slide-active .icon");
        if (activeSlide) {
          activeSlide.classList.remove("scale-75");
          activeSlide.classList.add("scale-100");
        }
      },

      init: function() {
        console.log("swiper ikon masih dimuat dengan index ", initialIndex);
        setTimeout(() => {
          this.slideTo(initialIndex);
        }, 50);
      }
    }
  });

  // ✅ Event listener pada ikon organisasi
  document.querySelectorAll('.icon').forEach((icon) => {
    icon.addEventListener('click', (event) => {
      const clickedIcon = event.currentTarget;
      const slideIndex = parseInt(clickedIcon.getAttribute('slide-index'), 10);

      // ✅ Pastikan instance Swiper tersedia sebelum dipanggil
      if (window.swiper && typeof window.swiper.slideTo === "function") {
        window.swiper.slideTo(slideIndex);
      } 

      // ✅ Perbaikan kesalahan translateX
      const swiperWrapper = document.getElementById('swiper-wrapper');
      if (swiperWrapper) {
        const slideWidth = swiperWrapper.querySelector('.swiper-slide')?.offsetWidth || 0;
        const translateX = -(slideWidth * slideIndex) + 'px';
        swiperWrapper.style.transform = `translateX(${translateX})`;
      } else {
        console.error("Error: swiper-wrapper tidak ditemukan di DOM.");
      }
    });
  });

    window.addEventListener('load', function() {
    // Pastikan kedua swiper sudah sepenuhnya dimuat
    setTimeout(() => {
      if (window.swiper && typeof window.swiper.slideTo === "function") {
        window.swiper.slideTo(initialIndex);
      }
      
      if (window.swiper_icon && typeof window.swiper_icon.slideTo === "function") {
        window.swiper_icon.slideTo(initialIndex);
      }
      console.log("Load event: sinkronisasi kedua swiper ke index:", initialIndex);
    }, 200);
  });
});