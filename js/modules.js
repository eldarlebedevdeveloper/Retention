function scrollToMyPersonalSection(navigationButton, section) {
  document.querySelector(navigationButton).addEventListener('click', () => {
    document
      .querySelector(section)
      .scrollIntoView({ behavior: 'smooth', block: 'start' })
  })
}

function menu() {
  const mediaQuery1024 = window.matchMedia('(max-width: 1024px)').matches
  const menu = document.querySelector('.menu')
  const menuItems = document.querySelectorAll('.menu_list li')
  const menuWidth = menu.clientWidth

  menu.style.left = menuWidth * -1 - 50 + 'px'
  menu.style.transition = '1s'
  menu.style.transitionProperty = 'left'

  let countCLick = 0

  scrollToMyPersonalSection('.header_logo', '.presentation')

  if (mediaQuery1024) {
    document
      .querySelector('.header_menu > div')
      .addEventListener('click', () => {
        countCLick++
        if (countCLick % 2) {
          menu.style.zIndex = 800
          menu.style.left = 0 + 'px'
          document.querySelector('.header_menu-icon img').src = 'img/close.svg'
        } else {
          menu.style.left = menuWidth * -1 - 50 + 'px'
          document.querySelector('.header_menu-icon img').src =
            'img/header/menu.svg'
        }
      })

    hideMenuWhenClickItemsMenu()
  } else {
    hideMenuWhenClickItemsMenu()

    document
      .querySelector('.header_menu > div')
      .addEventListener('click', () => {
        countCLick++

        menu.style.zIndex = 800
        menu.style.left = 0 + 'px'
      })

    document.querySelector('.menu_close').addEventListener('click', () => {
      menu.style.left = menuWidth * -1 - 50 + 'px'
    })
  }

  function hideMenuWhenClickItemsMenu(params) {
    menuItems.forEach((menuItem, index) => {
      menuItem.addEventListener('click', () => {
        countCLick++
        menu.style.left = menuWidth * -1 - 50 + 'px'
        document.querySelector('.header_menu-icon img').src =
          'img/header/menu.svg'
      })
    })
  }

  const header = document.querySelector('header.header')
  let trigerForAnimation = header.scrollHeight
  let trigerForAnimationNext = (trigerForAnimation + 100) * -1

  if (pageYOffset > 100) {
    header.style.top = trigerForAnimationNext + 'px'
  }

  window.addEventListener('scroll', function () {
    if (pageYOffset > trigerForAnimation) {
      header.style.top = trigerForAnimationNext + 'px'
    } else {
      header.style.top = 0 + 'px'
    }
    if (countCLick % 2) {
      header.style.top = 0 + 'px'
    }
  })

  menuItems.forEach((item, index) => {
    scrollToMyPersonalSection(
      `.menu_list li:nth-child(${index + 1})`,
      item.dataset.menuanchor
    )
  })
}

function footer() {
  scrollToMyPersonalSection('.footer_logo', '.presentation')

  document.querySelectorAll('.footer_menu li').forEach((item, index) => {
    scrollToMyPersonalSection(
      `.footer_menu li:nth-child(${index + 1})`,
      item.dataset.menuanchor
    )
  })
}
