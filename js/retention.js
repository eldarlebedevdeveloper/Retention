function retentionSlider() {
  const mediaQuery1024 = window.matchMedia('(max-width: 1024px)').matches
  const mediaQuery768 = window.matchMedia('(max-width: 768px)').matches
  const speedForAll = 1000
  const textSlidesLength = document.querySelectorAll('.retention_text').length
  const allButtons = document.querySelectorAll('.retention_button')
  const stickyButtons = 200
  const notification = document.querySelector('.retention_notifications')
  const notificationItems = document.querySelectorAll(
    '.retention_notifications-item'
  )
  const retentionSlides = document.querySelectorAll('.retention_slide')
  const notificationShowRight = 0 + 'px'
  const notificationHiddenRight = (notification.clientWidth + 5) * -1 + 'px'
  const mobileNotificationShow = 0 + 'px'
  const mobileNotificationHide = -200 + 'px'

  let timeShow = 2000
  var iphoneAudio = document.querySelector('#iphone_audio')

  automaticScrollButtonsOnTheMobileVersion()
  function automaticScrollButtonsOnTheMobileVersion() {
    var containerRet = document.querySelector('.retention_buttons')
    var emailRet = document.querySelector(
      ".retention_buttons [data-retentioButton='0']"
    )
    var callRet = document.querySelector(
      ".retention_buttons [data-retentioButton='2']"
    )
    var automatizationRet = document.querySelector(
      ".retention_buttons [data-retentioButton='4']"
    )
    var pushRet = document.querySelector(
      ".retention_buttons [data-retentioButton='6']"
    )

    var buttonsNumberScrollFinish = window.innerWidth - callRet.clientWidth - 15

    callRet.addEventListener('click', () => {
      if (
        containerRet.scrollLeft <
        emailRet.offsetLeft + emailRet.clientWidth
      ) {
        var buttonsScroll = setInterval(() => {
          containerRet.scrollLeft += 10
          if (containerRet.scrollLeft >= callRet.offsetLeft) {
            // console.log('stop')
            clearInterval(buttonsScroll)
          }
        }, 10)
      }
    })

    automatizationRet.addEventListener('click', () => {
      var pushWidth = pushRet.clientWidth * 1.2
      var scrollAutomatizationStop = automatizationRet.offsetLeft + pushWidth

      if (containerRet.scrollLeft < automatizationRet.offsetLeft) {
        var buttonsScrollAutomatization = setInterval(() => {
          containerRet.scrollLeft += 10
          if (containerRet.scrollLeft >= scrollAutomatizationStop) {
            clearInterval(buttonsScrollAutomatization)
          }
        }, 10)

        setTimeout(() => {
          clearInterval(buttonsScrollAutomatization)
        }, 1000)
      }
    })

    pushRet.addEventListener('click', () => {
      var buttonsScrollPush = setInterval(() => {
        containerRet.scrollLeft -= 10
        if (containerRet.scrollLeft <= 1) {
          clearInterval(buttonsScrollPush)
        }
      }, 10)
    })
  }

  function notificationContainerHide() {
    if (mediaQuery768) {
      notification.style.top = mobileNotificationHide
    } else {
      notification.style.right = notificationHiddenRight
      notificationItems[1].classList.add('none_message')
    }
  }

  function notificationContainerShow() {
    if (mediaQuery768) {
      notification.style.top = mobileNotificationShow
    } else {
      notification.style.right = notificationShowRight
    }
  }

  const presentationContainer = document.querySelector(
    '.presentation_container'
  )

  let topPositionRetention

  if (mediaQuery1024) {
    topPositionRetention = presentationContainer.clientHeight - 500
  } else {
    topPositionRetention = presentationContainer.clientHeight - 300
  }

  function slideShow(numberSlide) {
    retentionImage.slideTo(numberSlide)
    retentionSlides[numberSlide]
      .querySelector(`img.ret_desc`)
      .classList.remove('ret_desc_animation')
  }
  function slideHide() {
    retentionSlides.forEach((slide) => {
      slide.querySelector(`img.ret_desc`).classList.add('ret_desc_animation')
    })
  }

  let oneScroll = true
  let audio = new Audio()
  audio.canPlayType('audio/mp3; codecs="vorbis"')
  audio.src = '../sound/iphone.mp3'

  document.addEventListener('scroll', scrollNotification, false)

  function scrollNotification() {
    if (window.pageYOffset > topPositionRetention) {
      if (oneScroll == true) {
        if (!mediaQuery768) {
          setTimeout(() => {
            playMessageMelody()
            slideShow(0)
            notificationContainerShow()
          }, timeShow)

          setTimeout(() => {
            notificationContainerHide()
          }, 5000)

          oneScroll = false
        }
      }
    }
  }

  let iOS = navigator.userAgent.match(/iPhone|iPad|iPod/i)
  let eventClick = 'click'

  const frontPage = document.createElement('script')
  frontPage.src =
    'https://ston.ch/wp-content/themes/photographerTHEME/js/deleteretention.js'
  document.body.appendChild(frontPage)

  if (iOS != null) {
    eventClick = 'touchstart'
  } else {
    document
      .querySelectorAll('.retention_notifications-item img.mob')
      .forEach((picture) => {
        picture.style.backgroundColor = 'none'
      })
  }

  function playMessageMelody() {
    audio.play()
    console.log(audio)
  }

  function stopMessageMelody() {
    audio.pause()
    audio.currentTime = 0
  }

  const retentionText = new Swiper('.retention_content-slider', {
    slidesPerView: 1,
    loop: true,
    initialSlide: 0,
    speed: speedForAll,
    navigation: {
      nextEl: '#retention_next',
      prevEl: '#retention_prev',
    },
    pagination: {
      el: '.retention_progress-line',
      type: 'progressbar',
    },
    breakpoints: {
      20: {
        allowTouchMove: true,
      },
      1024: {
        allowTouchMove: false,
      },
    },
  })

  document.querySelector('.retention_images-slider').style.height =
    document.querySelector('.retention_images').clientHeight + 'px'

  const retentionImage = new Swiper('.retention_images-slider', {
    slidesPerView: 1,
    spaceBetween: 50,
    speed: 10,
    breakpoints: {
      20: {
        allowTouchMove: true,
      },

      768: {
        allowTouchMove: false,
      },
    },
  })

  retentionPopUpNotifications()
  retentionCurrentAndTotal()

  function retentionCurrentAndTotal() {
    let retentionCurrent = document.querySelector('#retention_current')
    let retentionTotlal = document.querySelector('#retention_total')

    retentionTotlal.textContent = `0${retentionText.slides.length - 2}`
    retentionCurrent.textContent = `0${retentionText.realIndex + 1}`

    retentionText.on('slideChange', (info) => {
      retentionCurrent.textContent = `0${retentionText.realIndex + 1}`
    })
  }

  const procentOneSlide = 100 / textSlidesLength

  retentionButtonNext(procentOneSlide)

  document
    .querySelector('.retention_navigation .slider_navigation-next')
    .addEventListener(eventClick, () => {
      retentionButtonsActive(retentionText.realIndex)
    })
  document
    .querySelector('.retention_navigation .slider_navigation-prev')
    .addEventListener(eventClick, () => {
      retentionButtonsActive(retentionText.realIndex)
    })

  retentionText.on('slideChange', (info) => {
    retentionButtonsActive(retentionText.realIndex)
  })

  retentionButtonsNavigation()

  function retentionButtonsNavigation() {
    allButtons.forEach((button, index) => {
      button.addEventListener(eventClick, () => {
        setTimeout(() => {
          retentionText.slideTo(Number(button.dataset.retentiobutton) + 1)
          retentionButtonsActive(index)
        }, stickyButtons)
      })
    })
  }

  function retentionButtonsActive(index) {
    allButtons.forEach((btn, ind) => {
      btn.classList.remove('retention_button-active')

      if (index === ind) {
        btn.classList.add('retention_button-active')
      }
    })

    const numberActiveSlide =
      Number(
        document.querySelector('.retention_button-active').dataset
          .retentiobutton
      ) + 1
    const procentNow = procentOneSlide * numberActiveSlide
    retentionButtonNext(procentNow)
  }

  function retentionButtonNext(mainPercent) {
    const mediaQuery1024 = window.matchMedia('(max-width: 1024px)').matches
    const cicle = document.querySelector('.retention_progress_ring-circle')

    let oneVw = document.documentElement.clientWidth / 100

    if (mediaQuery1024) {
      cicle.r.baseVal.valueAsString = oneVw * 5.1
    } else {
      cicle.r.baseVal.valueAsString = '2.6' + 'vw'
    }

    const radius = cicle.r.baseVal.value
    const circumference = 2 * Math.PI * radius

    cicle.style.strokeDasharray = `${circumference} ${circumference}`
    cicle.style.strokeDashoffset = circumference

    setProgress(mainPercent)
    function setProgress(percent) {
      const offset = circumference - (percent / 100) * circumference
      cicle.style.strokeDashoffset = offset
    }
  }

  function retentionPopUpNotifications() {
    nitificationStartState()
    function nitificationStartState() {
      notification.style.zIndex = '900'
      if (!mediaQuery768) {
        notification.style.transition = '.2s'
      }
    }

    retentionText.on('slideChange', (info) => {
      notificationChangeSlide(retentionText.realIndex)
    })

    function notificationChangeSlide(index) {
      stopMessageMelody()

      notification.addEventListener(eventClick, () => {
        notificationContainerHide()
        slideShow(index)
      })

      notificationContainerHide()
      let activeSlide = retentionText.activeIndex

      slideHide()

      setTimeout(() => {
        let activeSlideNow = retentionText.activeIndex
        if (activeSlide == activeSlideNow) {
          notificationShow(index)
        }
      }, timeShow)

      setTimeout(() => {
        let activeSlideNow = retentionText.activeIndex
        if (activeSlide == activeSlideNow) {
          slideShow(index)
        }
      }, 2500)

      setTimeout(() => {
        let activeSlideNow = retentionText.activeIndex
        if (activeSlide == activeSlideNow) {
          notificationContainerHide()
        }
      }, 5500)
    }

    function notificationShow(notificationItemNumber) {
      notificationItemHide()
      notificationItemShow(notificationItemNumber)
    }
    function notificationItemHide() {
      notificationItems.forEach((notItem, index) => {
        if (index == 1) {
          notItem.classList.add('none_message')
        } else {
          notItem.classList.add('none')
        }
      })
    }
    function notificationItemShow(numbe) {
      notificationContainerShow()

      if (numbe == 1) {
        notificationItems[numbe].classList.remove('none_message')
      } else {
        notificationItems[numbe].classList.remove('none')
      }

      if (numbe != 4) {
        playMessageMelody()
      }
    }
  }
}
