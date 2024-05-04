document.addEventListener("DOMContentLoaded", function() {
    
    let sliders = document.querySelectorAll('[id^="slider"]');
    console.log(sliders);

    sliders.forEach(function(slider) {
        let img_path = slider.getAttribute('img_path');
        slider.style.background = `center no-repeat`;
        slider.style.backgroundSize= `cover`;
        slider.style.backgroundImage = `url('${img_path}')`;
    });
    const swiper = new Swiper(".swiper-hero", {
    // Optional parameters
        direction: "horizontal",
        loop: true,
        effect: "fade",
        autoplay: {
            delay: 4000,
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        scrollbar: {
            el: ".swiper-scrollbar",
        },
    });
});
