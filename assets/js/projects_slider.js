const sliderTextElement = document.querySelector('.slider__text');
const slideCounterElement = document.querySelector('.slider__current-count');
const textElement = document.querySelector('.info__text');
const descriptionElement = document.querySelector('.description');

sliderTextElement.innerText = sliderTexts[0];
textElement.innerHTML = pageTexts[0];
descriptionElement.innerHTML = pageTexts[0];

const swiper = new Swiper('.swiper', {
    navigation: {
        nextEl: '.slider__button-next',
        prevEl: '.slider__button-prev',
    },
    simulateTouch: true,
    loop: true,
    on: {
        slideChange: function () {
            const currentIndex = this.realIndex;
            sliderTextElement.innerText = sliderTexts[currentIndex];
            slideCounterElement.innerText = currentIndex + 1;
            textElement.innerHTML = pageTexts[currentIndex];
            descriptionElement.innerHTML = pageTexts[currentIndex];
        },
    },
});
