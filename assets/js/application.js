document.addEventListener('DOMContentLoaded', function (event) {
    const body = document.querySelector('.body');

    const application = document.getElementById('application');
    const infoApplication = document.getElementById('new-application');
    const allApplications = document.querySelectorAll('.application');

    const fields = document.querySelectorAll('.application__input, .application__textarea');
    const list = document.querySelector('.application__list');
    const listItems = document.querySelectorAll('.application__list-item');
    const submitButton = document.querySelector('.application__btn');

    if (listItems.length > 0) {
        listItems[0].classList.add('application__list-item_first');
        listItems[listItems.length - 1].classList.add('application__list-item_last');
    }

    const putApplicationBtn = document.getElementById('btn_open-application');
    const enterBtn = document.getElementById('btn_open-info-application');
    const okBtn = document.getElementById('btn_close-info-application');

    const phoneField = document.getElementById('phone');
    const companyField = document.getElementById('company');
    const humanField = document.getElementById('human');
    const commentField = document.getElementById('comment');

    const newPhoneField = document.getElementById('new-phone');
    const newCompanyField = document.getElementById('new-company');
    const newHumanField = document.getElementById('new-human');
    const newCommentField = document.getElementById('new-comment');
    const newSystemField = document.getElementById('new-system');

    const toast = new Notyf({
        position: {
            x: 'center',
            y: 'top',
        },
        types: [
            {
                type: 'error',
                background: '#cc3d4d',
                duration: 2000,
            },
        ],
    });

    console.log(toast);

    const toggleModal = (isOpen, elem) => {
        elem.classList.toggle('application_open', isOpen);
        body.classList.toggle('no-scroll', isOpen);
    };

    window.addEventListener('load', () => {
        const urlParams = new URLSearchParams(window.location.search);
        const openModal = urlParams.get('openApplication');

        if (Boolean(openModal)) {
            toggleModal(true, application);
        }
    });

    putApplicationBtn.addEventListener('click', () => {
        toggleModal(true, application);
    });

    document.querySelectorAll('.cross-icon').forEach((cross) => {
        cross.addEventListener('click', () => {
            allApplications.forEach((application) => {
                toggleModal(false, application);
            });
        });
    });

    allApplications.forEach((application) => {
        application.addEventListener('click', (event) => {
            if (!application.querySelector('.application__modal').contains(event.target)) {
                toggleModal(false, application);
            }
        });
    });

    const validatePhone = (phone) => {
        const phonePattern =
            /^(\+7|7|8)?[\s\-]?\(?[489]\d{2}\)?[\s\-]?\d{3}[\s\-]?\d{2}[\s\-]?\d{2}$/;
        return phonePattern.test(phone);
    };

    const validateField = (field) => {
        const isListValidate = field.classList.contains('application__list-item');
        const validationIcon = isListValidate
            ? field.parentElement.nextElementSibling
            : field.nextElementSibling;
        const isTextArea = field.classList.contains('application__textarea');
        let isValid = false;

        if (isListValidate) {
            isValid = true;
        } else {
            if (field.type === 'tel') {
                isValid = validatePhone(field.value);
            } else {
                isValid = field.value.trim() !== '';
            }
        }

        if (isValid) {
            field.classList.add('bg-validated');
            if (!field.classList.contains('application__textarea')) {
                validationIcon.classList.remove('validation-icon_none');
            }
        } else {
            field.classList.remove('bg-validated');
            if (!isTextArea) {
                validationIcon.classList.add('validation-icon_none');
            }
        }
    };

    listItems.forEach((field) => {
        field.addEventListener('click', () => {
            listItems.forEach((item) => {
                item.classList.remove('bg-validated');
            });

            field.classList.add('bg-validated');
            validateField(field);
        });
    });

    fields.forEach((field) => {
        field.addEventListener('input', () => {
            validateField(field);
        });
    });

    const resetForm = () => {
        fields.forEach((field) => {
            field.value = '';
            validateField(field);
        });

        listItems.forEach((item) => {
            item.classList.remove('bg-validated');
        });

        document
            .querySelector('.application__field-list')
            .querySelector('.application__validation-icon')
            .classList.add('validation-icon_none');
    };

    enterBtn.addEventListener('click', (event) => {
        event.preventDefault();

        const isFormValid = !document.querySelector('.validation-icon_none');

        if (isFormValid) {
            newPhoneField.textContent = phoneField.value;
            newCompanyField.textContent = companyField.value;
            newHumanField.textContent = humanField.value;
            newCommentField.textContent = commentField.value.trim()
                ? `« ${commentField.value}  »`
                : '';
            newCommentField.classList.toggle('display-none', !commentField.value.trim());

            const selectedSystem = list.querySelector('.bg-validated');
            newSystemField.textContent = selectedSystem ? selectedSystem.textContent : '';

            toggleModal(false, application);
            toggleModal(true, infoApplication);
            resetForm();
        } else {
            toast.error('Пожалуйста, заполните правильно поля заявки.');
        }
    });

    okBtn.addEventListener('click', () => {
        toggleModal(false, infoApplication);
    });
});
