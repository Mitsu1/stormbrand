document.addEventListener("DOMContentLoaded", function() {

    var screenWidth = screen.width;
    let widthScreen = window.innerWidth;
    let texts = document.querySelectorAll('[id^="card_text"]');
    console.log(texts)   
    if ( screenWidth < 769 ){

        var elementoA = document.querySelector(".header-widget");
        var elementoB = document.querySelector(".main-navigation");
        
        var padreB = elementoA.parentNode;
        padreB.insertBefore(elementoA, elementoB);
    }
    
    window.addEventListener('scroll', function() {
        let currentScroll = document.documentElement.scrollTop;
        for (let element = 0; element < texts.length; element++) {
            let card_text = document.getElementById(texts[element].id);
            let base_animation = 'pause_animation';
            let text_animation = 'move-up-transition';
            //console.log(card_text)
            card_text.classList.remove(text_animation)
            card_text.classList.add(base_animation)

            if (currentScroll >= 500){
                card_text.classList.remove(base_animation)
                card_text.classList.add(text_animation)
            }
        }
        console.log(currentScroll)
    });

    document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = document.querySelectorAll('img[loading="lazy"]');
        var options = {
            threshold: 0.5 // Define cuánto del elemento debe estar visible antes de cargarlo
        };
        var lazyLoadObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.removeAttribute('data-src');
                    lazyLoadObserver.unobserve(lazyImage);
                }
            });
        }, options);
    
        lazyImages.forEach(function(lazyImage) {
            lazyLoadObserver.observe(lazyImage);
        });
    });
    
});