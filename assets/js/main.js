document.addEventListener('DOMContentLoaded', () => {

    const setupCalculator = (inputId, calculatorId) => {

        const calcInput = document.getElementById(inputId);
        const calculator = document.getElementById(calculatorId);
        const numberButtons = calculator.querySelectorAll('.info__calculator-btn-number');
        const deleteButton = calculator.querySelector('.info__calculator-btn-delete');
        const enterButton = calculator.querySelector('.info__calculator-btn-enter');

        calcInput.addEventListener('click', () => {
            calculator.classList.remove('info__calculator-closed');
        });

        numberButtons.forEach((button) => {
            button.addEventListener('click', () => {
                calcInput.value = calcInput.value === "0" ? button.textContent : calcInput.value + button.textContent;
            });
        });

        deleteButton.addEventListener('click', () => {
            calcInput.value = calcInput.value.slice(0, -1);
        });

        enterButton.addEventListener('click', () => {
            calculator.classList.add('info__calculator-closed');
        });

        document.addEventListener('click', (event) => {
            if (!calcInput.contains(event.target) && !calculator.contains(event.target)) {
                calculator.classList.add('info__calculator-closed');
            }
        });
    }

    setupCalculator('calcInput1', 'calculator1');
    setupCalculator('calcInput2', 'calculator2');
});
