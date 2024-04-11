// Модальные окна
MicroModal.init({
	openTrigger: 'data-micromodal-open',
	closeTrigger: 'data-micromodal-close',
	disableFocus: true,
	awaitOpenAnimation: true,
	awaitCloseAnimation: true,
})


// Изменение хедера при скролле
;(function() {
	let header = document.querySelector('.header');
	if (header === null) {
		return;
	}
	window.onscroll = function() {
		windowScroll();
	};
	function windowScroll() {
		header.classList.toggle('header_scroll', header.scrollTop > 50 || document.documentElement.scrollTop > 50);
	}
	const rows = document.querySelectorAll('.price__row');

        rows.forEach((row, index) => {
            if (index === 0) {
                row.classList.add('active');
            }
            
            row.addEventListener('mouseover', () => {
                rows.forEach(r => r.classList.remove('active'));
                row.classList.add('active');
            });
        });

})();


// Иконка чата - ссылки на социальные сети
;(function () {
	const chat = document.querySelector('.chat')
	if (chat === null) {
		return;
	}
	const chatBtn = document.querySelector('.chat__button');
	const chatPulse = document.querySelector('.chat__pulse');
	const chatWa = document.querySelector('.chat__link_wa')
	const chatTg = document.querySelector('.chat__link_tg')
	const chatIg = document.querySelector('.chat__link_ig')
	const chatFm = document.querySelector('.chat__link_fm')
	
	chatBtn.addEventListener('click', () => {
		chatBtn.classList.toggle('chat__button_rotate')
		chatPulse.classList.toggle('chat__pulse_paused')
		chatWa.classList.toggle('show')
		chatTg.classList.toggle('show')
		chatIg.classList.toggle('show')
		chatFm.classList.toggle('show')
	})
})();


// Мобильное меню
;(function () {
	const menu = document.querySelector('.header__menu')
	if (menu === null) {
		return;
	}
	const body = document.querySelector('.body')
	const area = document.querySelector('.header__area')
	const burger = document.querySelector('.header__burger')
	const menuLinks = document.querySelectorAll('.header__menu-link')
	area.addEventListener('click', () => {
		body.classList.toggle('body_noscroll')
		burger.classList.toggle('header__burger_active')
		menu.classList.toggle('header__menu_open')
	})
	menuLinks.forEach(function(menuLink) {
		menuLink.addEventListener('click', () => {
			body.classList.toggle('body_noscroll')
			burger.classList.toggle('header__burger_active')
			menu.classList.toggle('header__menu_open')
		})
	})
})();


// Маска номера телефона Эстонии в форме
;(function () {
	const estoniaMask = document.querySelector('.estonia-mask')
	if (estoniaMask === null) {
		return;
	}
	$('.estonia-mask').mask('+372 9999-9999');
	$.fn.setCursorPosition = function(pos) {
		if ($(this).get(0).setSelectionRange) {
			$(this).get(0).setSelectionRange(pos, pos);
		} else if ($(this).get(0).createTextRange) {
			var range = $(this).get(0).createTextRange();
			range.collapse(true);
			range.moveEnd('character', pos);
			range.moveStart('character', pos);
			range.select();
		}
	};
	$('input[type="tel"]').click(function(){
		$(this).setCursorPosition(5);
	});
})();


// Главная страница, секция "Мы в цифрах", подсчет цифр при скролле
;(function () {
	const numbers = document.querySelector('#numbers')
	if (numbers === null) {
		return;
	}
	$(window).scroll( function(){
		let topWindow = $(window).scrollTop();
		let height = $(window).height() / 2;
		$('.counter').each(function () {
			let top = $(this).offset().top;
			let $this = $(this);
			if (topWindow >= top - height && $this.attr('scrolled') !== 'true' && topWindow <= top + height) {
				let data = $this.find('[data-num]');
				$this.attr('scrolled', 'true');
				data.each(function(index, item){
					setTimeout(() => {
						$({ Counter: 0 }).animate({ Counter: $(item).data('num') }, {
							duration: 1000,
							easing: 'swing',
							step: function () {
									$(item).text(this.Counter.toFixed(0));
							}
						});
					}, 300);
				})
			}
		});
	});
})();


// Главная страница все аккордеоны
;(function () {
    const accordions = document.querySelector('.accordions')
    if (accordions === null) {
        return;
    }

    const activeNewAccordion = document.querySelector('.accordion__header_active-new');
    if (activeNewAccordion !== null) {
        const accordionContent = activeNewAccordion.nextElementSibling;
        accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
        activeNewAccordion.classList.add('accordion__header_active'); // Добавляем класс
    }


    const accordionTriggers = document.querySelectorAll('.js-accordion-trigger');
    accordionTriggers.forEach(accordionTrigger => {
        accordionTrigger.addEventListener('click', () => {
            accordionTrigger.classList.toggle('accordion__header_active');
            const accordionContent = accordionTrigger.nextElementSibling;
            if (accordionTrigger.classList.contains('accordion__header_active')) {
                accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
            } else {
                accordionContent.style.maxHeight = "0";
            }
        });
    });
})();




// Слайдер с услугами на главной странице
const servicesSlider = new Swiper('.services-slider', {
	slidesPerView: 1.03,
	spaceBetween: 10,
	breakpoints: {
		577: {
			slidesPerView: 1.3,
			spaceBetween: 20,
		},
		993: {
			slidesPerView: 3,
			spaceBetween: 60,
		},
	}
});


// Слайдер с фотографиями на главной странице, секция "Портфолио"
const portfolioSlider = new Swiper('.portfolio-slider', {
	speed: 1000,
	slidesPerView: 1.1,
	spaceBetween: 10,
	initialSlide: 0,
	breakpoints: {
		577: {
			spaceBetween: 20,
		},
		993: {
			slidesPerView: 1,
			spaceBetween: 60,
			initialSlide: 2,
			pagination: {
				el: ".portfolio-slider__pagination",
				dynamicBullets: true,
			},
			navigation: {
				nextEl: '.portfolio-slider__next',
				prevEl: '.portfolio-slider__prev',
			},
		},
	}
});


// Слайдер с фотографиями на главной странице, секция "О компании"
const companySlider = new Swiper('.company-slider', {
	slidesPerView: 1.05,
	spaceBetween: 10,
	breakpoints: {
		577: {
			slidesPerView: 1.5,
			spaceBetween: 20,
		},
		993: {
			slidesPerView: 3,
			spaceBetween: 60,
		},
	}
});


// Слайдер с фотографиями на главной странице, секция "Примеры работ"
const processSlider = new Swiper('.process-slider', {
	speed: 1000,
	slidesPerView: 1.1,
	spaceBetween: 10,
	initialSlide: 0,
	breakpoints: {
		577: {
			spaceBetween: 20,
		},
		993: {
			slidesPerView: 1,
			spaceBetween: 60,
			initialSlide: 2,
			pagination: {
				el: ".process-slider__pagination",
				dynamicBullets: true,
			},
			navigation: {
				nextEl: '.process-slider__next',
				prevEl: '.process-slider__prev',
			},
		},
	}
});


// Слайдер с фотографиями на главной странице, секция "Внутренняя отделка"
const decorationSlider = new Swiper('.decoration-slider', {
	slidesPerView: 1.05,
	spaceBetween: 10,
	breakpoints: {
		577: {
			slidesPerView: 1.5,
			spaceBetween: 20,
		},
		993: {
			slidesPerView: 3,
			spaceBetween: 60,
		},
	}
});


// Слайдер с отзывами на главной странице, секция "Отзывы"
const reviewsSlider = new Swiper('.reviews-slider', {
	slidesPerView: 1.05,
	spaceBetween: 10,
	loop: true,
	autoplay: true,
	speed: 1200,
	breakpoints: {
		577: {
			spaceBetween: 20,
		},
		993: {
			slidesPerView: 1.5,
			spaceBetween: 60,
			navigation: {
				nextEl: '.reviews-slider__next',
				prevEl: '.reviews-slider__prev',
			},
		},
	}
});


// Слайдер с логотипами партнеров на главной странице, секция "Наши партнеры"
const partnersSlider = new Swiper('.partners-slider', {
	slidesPerView: 1.05,
	spaceBetween: 10,
	speed: 800,
	breakpoints: {
		577: {
			slidesPerView: 2.5,
			spaceBetween: 20,
		},
		993: {
			slidesPerView: 4,
			spaceBetween: 60,
			navigation: {
				nextEl: '.partners-slider__next',
				prevEl: '.partners-slider__prev',
			},
		},
	}
});