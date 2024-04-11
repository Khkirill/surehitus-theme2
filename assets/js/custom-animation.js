// custom-animation.js

// Функция для проверки, является ли устройство мобильным
function isMobileDevice() {
    return window.innerWidth < 900; // Измените значение 900 на то, которое соответствует вашему определению "мобильного" устройства
}

// Проверяем, если устройство мобильное, то просто завершаем выполнение скрипта
if (isMobileDevice()) {
    // В случае мобильного устройства ничего не делаем
    console.log('This is a mobile device. Animations are disabled.');
} else {
(function() {
    gsap.utils.toArray(".title-2").forEach(function(title) {
        gsap.from(title, {
            scrollTrigger: {
                trigger: title,
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none reverse",
            },
            x: -100, // начальное положение за пределами экрана
            opacity: 0, // начальная прозрачность
            duration: 1,
            ease: "power4.out"
        });
    });
})();

(function() {
    gsap.utils.toArray("#price__row-title-title-3").forEach(function(title22) {
        gsap.from(title22, {
            scrollTrigger: {
                trigger: '.price',
                start: "top 80%",
                end: "bottom 40%",
                toggleActions: "play none none reverse",

            },
            y: 50,
            opacity: 0,
            duration: 1,
        });
    });
})();
	
(function() {
    gsap.utils.toArray(".title-11111").forEach(function(title1) {
        gsap.from(title1, {
            scrollTrigger: {
                trigger: title1,
                start: "top 80%",
                end: "bottom 40%",
                toggleActions: "play none none reverse",

            },
            y: 50,
            opacity: 0,
            duration: 0.4,
        });
    });
})();

  
(function() {
    gsap.utils.toArray(".rows__text, .column__text, .media-unit__text, .block__text, .footer__submenu, .card__text, .caption, .title-31").forEach(function(text) {
        gsap.from(text, {
            scrollTrigger: {
                trigger: text,
                start: "top 80%",
                end: "bottom 40%",
                toggleActions: "play none none reverse",
            },
            y: 50,
            opacity: 0,
            duration: 0.3, // Продолжительность анимации
        });
    });
})();

(function() {
    gsap.utils.toArray(".btn, .block__column-pricebtn").forEach(function(button) {
        gsap.from(button, {
            scrollTrigger: {
                trigger: button,
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none reverse",
            },
            y: 30,
            opacity: 1,
            duration: 1, // Продолжительность анимации
        });
    });
})();


(function() {
    gsap.from('.partners-slider__slide', {
        scrollTrigger: {
            trigger: '.partners-section',
            start: '20% center',
            end: '+=300px',
            scrub: true,
			toggleActions: "play none none reverse",
        },
        scale: 0,
        transformOrigin: 'left center',
        ease: 'power2.inOut',
        stagger: 0.5,
		duration: 4,
    });
})();

(function() {
    gsap.from('.media-unit__img', {
        scrollTrigger: {
            trigger: '.media-unit',
            start: 'top center',
            end: 'center-=500px', // Анимация завершится немного раньше центра
            scrub: true,
			toggleActions: "play none none reverse",
        },
        opacity: 0,
        ease: 'none',
        duration: 1,
    });
})();

(function() {
    gsap.from('.company-slider__slide', {
        scrollTrigger: {
            trigger: '.about-company',
            start: 'top center',
            end: 'center-=200px', // Анимация завершится немного раньше центра
            scrub: true,
			toggleActions: "play none none reverse",
        },
        opacity: 0,
        ease: 'none',
        duration: 1,
    });
})();

(function() {
    gsap.from('.decoration-slider__slide', {
        scrollTrigger: {
            trigger: '.interior-decoration',
            start: 'top center',
            end: 'center-=400px', // Анимация завершится немного раньше центра
            scrub: true,
			toggleActions: "play none none reverse",
        },
        opacity: 0,
        ease: 'none',
        duration: 1,
    });
})();


(function() {
    gsap.from('#media-unit__column-image', {
        scrollTrigger: {
            trigger: '.leave-contacts',
            start: 'top center',
            end: 'center-=400px', // Анимация завершится немного раньше центра
            scrub: true,
			toggleActions: "play none none reverse",
        },
        opacity: 0,
        ease: 'none',
        duration: 1,
    });
})();
}

