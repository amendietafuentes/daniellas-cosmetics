document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector(".site-header");

  window.addEventListener("scroll", function () {
    let scroll = window.scrollY;

    if (scroll > 120) {
      document.body.classList.add("scrolled");

      header.classList.add("sticky");
    } else {
      document.body.classList.remove("scrolled");

      header.classList.remove("sticky");
    }
  });

  if (document.querySelector(".heroSwiper")) {
    new Swiper(".heroSwiper", {
      loop: true,

      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },

      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  }

  if (document.querySelector(".topbarSwiper")) {
    new Swiper(".topbarSwiper", {
      loop: true,

      slidesPerView: 1,

      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },

      allowTouchMove: false,
    });
  }

  if (document.querySelector(".productSwiper")) {
    new Swiper(".productSwiper", {
      loop: true,

      spaceBetween: 30,

      slidesPerView: 4,

      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      breakpoints: {
        320: {
          slidesPerView: 1,
        },

        768: {
          slidesPerView: 2,
        },

        1024: {
          slidesPerView: 4,
        },
      },
    });
  }
});
