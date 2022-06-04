

function profitSlider() {
    const swiperProfint = new Swiper('.profit_slider', {
      initialSlide: 0,
      slidesPerView: 'auto',

      loop:true,
      // cssMode: true,
      breakpoints: {
        30: {
          // slidesPerView: 1.3,
          slidesPerView: 'auto',
          simulateTouch: true

        },
        768: {
          // slidesPerView: 1.6,

        },
        1024: {
          // slidesPerView: 2.5,

        }
      },
     
      speed: 1000,
  
      navigation: {
        nextEl: '.profit_content-navigation .slider_navigation-next',
        prevEl: '.profit_content-navigation .slider_navigation-prev',
      },
    
    });
  }
   