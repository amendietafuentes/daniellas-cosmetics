document.addEventListener("DOMContentLoaded", function () {

  const header = document.querySelector(".site-header");

  window.addEventListener("scroll", function(){

    let scroll = window.scrollY;

    if(scroll > 120){

    document.body.classList.add("scrolled");

      header.classList.add("sticky");

    }else{

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
});
