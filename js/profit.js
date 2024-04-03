function profitSlider() {
  const swiperProfint = new Swiper('.profit_slider', {
    initialSlide: 0,
    slidesPerView: 'auto',
    loop: true,
    breakpoints: {
      30: {
        slidesPerView: 'auto',
        simulateTouch: true,
      },
    },
    speed: 1000,
    navigation: {
      nextEl: '.profit_content-navigation .slider_navigation-next',
      prevEl: '.profit_content-navigation .slider_navigation-prev',
    },
  })
}
