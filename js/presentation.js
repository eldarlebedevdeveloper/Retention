scrollToMyPersonalSection('.presentation_tv-star', '.retention')
scrollToMyPersonalSection('.presentation_tv-button', '.retention')
scrollToMyPersonalSection('.button_support', '.contact')

const retentionText = new Swiper('.presentation_slider', {
  slidesPerView: 1,
  spaceBetween: 20,
  direction: 'vertical',
  allowTouchMove: false,
  loop: true,
  autoplay: {
    delay: 2000,
  },
})
