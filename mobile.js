const menuOpenButton = document.querySelector("#menu-open-button");
const menuCloseButton = document.querySelector("#menu-close-button");
const body = document.body;

menuOpenButton.addEventListener("click", () => {
    body.classList.add("show-menu");
    
});

menuCloseButton.addEventListener("click", () => {
    body.classList.remove("show-menu");
    
});

//swiper js
const swiper = new Swiper('.slider-wrapper', {
    loop: true,
    grabCursor: true,
    spaceBetween: 100,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,

    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },


    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        },
    }
  });