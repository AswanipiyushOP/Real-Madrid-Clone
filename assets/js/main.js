/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
  loop: true,
  spaceBetween: 32,
  grabCursor: true,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints:{
    600: {
      slidesPerView: 2,
    },
    968: {
      slidesPerView: 3,
    },
  },
});


var mySwiper = new Swiper ('.swiper-containers', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  
  on: {
    transitionStart: function(){
      
      var videos = document.querySelectorAll('video');

      Array.prototype.forEach.call(videos, function(video){
        video.pause();
      });
    },
    
    transitionEnd: function(){
      
      var activeIndex = this.activeIndex;
      var activeSlide = document.getElementsByClassName('swiper-slides')[activeIndex];
      var activeSlideVideo = activeSlide.getElementsByTagName('video')[0];
      activeSlideVideo.play();
    
    },
  
  }
})
