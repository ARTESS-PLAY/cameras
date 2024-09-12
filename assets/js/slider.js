// const sliderTexts = [
// 	'ОТЕЛЬ «Hilton Garden Inn Moscow Krasnoselskaya»',
// 	'Универмаг «Цветной»',
// 	'Продовольственная розничная сеть «ДИКСИ»',
// 	'Городская ферма «РусЭко»',
// 	'Продовольственная розничная сеть «ДИКСИ»',
// 	'Офисное лофт-здание в Даниловской мануфактуре',
// ]

// const pageTexts = [
// 	'Мы&nbsp;успешно установили более 300 видеокамер внутри здания, на&nbsp;парковке и&nbsp;вдоль периметра отеля. Кроме того, мы&nbsp;реализовали установку примерно 190 точек прохода системы контроля доступа.',
// 	'Мы&nbsp;провели успешный монтаж более 500 видеокамер внутри здания, на&nbsp;парковке и&nbsp;вдоль периметра универмага. Также было установлено 200 точек прохода системы контроля доступа.',
// 	'Нами успешно смонтированы автоматическая пожарная сигнализация и&nbsp;система дымоудаления на&nbsp;базе финского оборудования ESMI, система видеонаблюдения на&nbsp;оборудовании и&nbsp;программном обеспечении VideoNet, охранная сигнализация на&nbsp;оборудовании и&nbsp;программном обеспечении Bolid, а&nbsp;также система контроля доступа на&nbsp;оборудовании Perco и&nbsp;ParsecNET.',
// 	'Наша компания успешно осуществила монтаж более 260 видеокамер внутри здания и&nbsp;вдоль периметра предприятия, используя систему &laquo;TRASSIR&raquo;. Установили более 90&nbsp;точек прохода системы контроля доступа, используя оборудование &laquo;APOLLO&raquo; США и&nbsp;программное обеспечение &laquo;APACS&raquo;.',
// 	'Нами успешно смонтированы системы наблюдения в&nbsp;более чем 160 магазинах продовольственной розничной сети магазинов &laquo;ДИКСИ&raquo; в&nbsp;Москве и&nbsp;области.',
// 	'Наша компания успешно завершила монтаж более 60&nbsp;камер и&nbsp;установку более 110 точек прохода на&nbsp;системе Parsec в&nbsp;офисно-лофт-здании, расположенном в&nbsp;бывшей Даниловской мануфактуре. Используя передовые технологии, мы&nbsp;обеспечили не&nbsp;только эффективное видеонаблюдение, но&nbsp;и&nbsp;интегрированную систему контроля доступа.',
// ]

// const sliderTextElement = document.querySelector('.slider__text')
// const slideCounterElement = document.querySelector('.slider__current-count')
// const textElement = document.querySelector('.info__text')
// const descriptionElement = document.querySelector('.description')

// sliderTextElement.innerText = sliderTexts[0]
// textElement.innerHTML = pageTexts[0]
// descriptionElement.innerHTML = pageTexts[0]

const swiper = new Swiper('.swiper', {
	navigation: {
		nextEl: '.slider__button-next',
		prevEl: '.slider__button-prev',
	},
	simulateTouch: true,
	on: {
		slideChange: function () {
			const currentIndex = swiper.realIndex
			sliderTextElement.innerText = sliderTexts[currentIndex]
			slideCounterElement.innerText = currentIndex + 1
			textElement.innerHTML = pageTexts[currentIndex]
			descriptionElement.innerHTML = pageTexts[currentIndex]
		},
	},
})
