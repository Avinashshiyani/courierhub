var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
  spaceBetween: 30,
  continue:true,
  centeredSlides: true,
  breakpoints:{
    640:{
      slidesPerView:4,
      centeredSlides:true,
    },
    1024:{
      slidesPerView:6,
      centeredSlides:true,
      spaceBetween:50,
    }
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".mySwiper2", {
spaceBetween: 30,
centeredSlides: true,
autoplay: {
  delay: 2500,
  disableOnInteraction: false,
},
breakpoints:{
  1440:{
    slidesPerView:3,
    centeredSlides:true,
    spaceBetween:-30,
  }
},
pagination: {
  el: ".swiper-pagination",
  clickable: true,
},
navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},
});