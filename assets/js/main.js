const setupCalculator = (inputId, calculatorId, maxDigits, placeholder) => {
    const calcInput = document.getElementById(inputId);
    const calculator = document.getElementById(calculatorId);
    const numberButtons = calculator.querySelectorAll('.info__calculator-btn-number');
    const deleteButton = calculator.querySelector('.info__calculator-btn-delete');
    const enterButton = calculator.querySelector('.info__calculator-btn-enter');

    const setPlaceholder = () => {
        if (calcInput.value === '') {
            calcInput.value = placeholder;
        }
    };

    const removePlaceholder = () => {
        if (calcInput.value === placeholder) {
            calcInput.value = '';
        }
    };

    const limitDigits = (inputValue) => {
        return inputValue.length < maxDigits;
    };

    calcInput.addEventListener('click', () => {
        calcInput.classList.remove('info__input--error');
        removePlaceholder();
        calculator.classList.remove('info__calculator-closed');
    });

    numberButtons.forEach((button) => {
        button.addEventListener('click', () => {
            calcInput.classList.remove('info__input--error');
            removePlaceholder();
            if (limitDigits(calcInput.value)) {
                calcInput.value =
                    calcInput.value === '0'
                        ? button.textContent
                        : calcInput.value + button.textContent;
                lue = button.textContent;
            }
        });
    });

    deleteButton.addEventListener('click', () => {
        calcInput.value = calcInput.value.slice(0, -1);
        calcInput.classList.remove('info__input--error');
        if (calcInput.value === '') {
            setPlaceholder();
        }
    });

    enterButton.addEventListener('click', () => {
        calcInput.classList.remove('info__input--error');
        setPlaceholder();
        calculator.classList.add('info__calculator-closed');
    });

    document.addEventListener('click', (event) => {
        if (!calcInput.contains(event.target) && !calculator.contains(event.target)) {
            calculator.classList.add('info__calculator-closed');
            setPlaceholder();
        }
    });

    setPlaceholder();
};

const allowedKeys = ['ArrowLeft', 'ArrowRight'];

document.querySelectorAll('.info__input').forEach((input) => {
    input.addEventListener('keydown', (event) => {
        if (!allowedKeys.includes(event.key)) {
            event.preventDefault();
        }
    });
});

setupCalculator('calcInput1', 'calculator1', 2, '--');
setupCalculator('calcInput2', 'calculator2', 3, '---');
