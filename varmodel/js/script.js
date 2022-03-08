if (document.querySelector('.header__popap')) {
    const headerPopaps = document.querySelectorAll('.header__popap')
    const headerLinks = document.querySelectorAll('.header_menu-list .header_menu-item')
    const btnPrev = document.querySelectorAll('.header__popup-btn-pev')
    const btnNext = document.querySelectorAll('.header__popup-btn-next')
    const btnClose = document.querySelectorAll('.header__popup-close')
    const searchBlock = document.querySelector('.search-block')
  
    const removeActive = () => {
        if(searchBlock) {
            searchBlock.classList.remove('active')
        }
        headerPopaps.forEach(el => {
            el.classList.remove('active')
        })
        headerLinks.forEach(el => {
            el.classList.remove('active')
        })
    }

    btnClose.forEach(e => e.addEventListener('click', () => removeActive()))

    btnPrev.forEach((e, i) => {
        e.addEventListener('click', () => {
            headerPopaps.forEach(el => {
                if (el.classList.contains('active')) {

                    if (!el.previousElementSibling) {
                        el.classList.remove('active')
                        headerPopaps[headerPopaps.length -1].classList.add('active')
                        return
                    }

                    el.classList.remove('active')
                    el.previousElementSibling.classList.add('active')
                }
            })
        })
    })

    btnNext.forEach((e, i) => {
        e.addEventListener('click', () => {
            let count = 0
            headerPopaps.forEach(el => {
                if (el.classList.contains('active') && count === 0) {

                    if (!el.nextElementSibling) {
                        count++
                        el.classList.remove('active')
                        headerPopaps[0].classList.add('active')
                        return
                    }

                    count++
                    el.classList.remove('active')
                    el.nextElementSibling.classList.add('active')
                }
            })
        })
    })

    headerLinks.forEach((e, i) => {
        e.addEventListener('click', () => {
            if (!e.classList.contains('active')) {
                removeActive()

                if(searchBlock) {
                    searchBlock.classList.add('active')
                }

                headerPopaps[i].classList.add('active')
                e.classList.add('active')
            } else {
                removeActive()
            }

        })
    })

  

}



if (document.querySelector('.video-block_play-video_btn')) {
    const vidoBtn = document.querySelector('.video-block_play-video_btn')
    const vidoBtnClose = document.querySelector('.youtube-popap svg')
    const vidoBgClose = document.querySelector('.youtube-popap__bg')
    const popup = document.querySelector('.youtube-popap')
    // const video = document.querySelector('.youtube-popap__wrapper video')
    const video = document.querySelector('.youtube-popap__wrapper iframe')
    const videoLink = document.querySelector('.video-link-test')

    vidoBtn.addEventListener('click', () => {
        popup.classList.add('active')
        document.querySelector('body').style.overflow = 'hidden'
        // video.play()
        video.src = videoLink.getAttribute('data-video-src');
    })
    vidoBtnClose.addEventListener('click', () => {
        popup.classList.remove('active')
        document.querySelector('body').style.overflow = 'auto'
        // video.pause()
        video.src = ''
    })
    vidoBgClose.addEventListener('click', () => {
        popup.classList.remove('active')
        document.querySelector('body').style.overflow = 'auto'
        // video.pause()
        video.src = ''
    })
}


if(document.querySelector('.header_menu-mobile')) {
    let burger = document.querySelector('.header_menu-mobile')
    let menu = document.querySelector('.header_menu')

    burger.addEventListener('click', () => {
        menu.classList.toggle('active')
    })

    let menuItems = document.querySelectorAll('.header_menu-item')
    menuItems.forEach(e => {
        e.addEventListener('click', () => {
            menu.classList.remove('active')
        })
    })
    
}