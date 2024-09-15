const body = document.querySelector(".body");
const calculationApplication = document.getElementById("calculation-application");
const calculationBtns = document.querySelectorAll(".btn_open-calculation-application")
const closeBtn = document.getElementById("btn_close-info-application")

calculationBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        toggleModal(true, calculationApplication);
    });
});

const toggleModal = (isOpen, elem) => {
    elem.classList.toggle("application_open", isOpen);
    body.classList.toggle("no-scroll", isOpen);
};

document.querySelector(".cross-icon").addEventListener("click", () => {
    toggleModal(false, calculationApplication);
});

closeBtn.addEventListener("click", () => {
    toggleModal(false, calculationApplication);
})

calculationApplication.addEventListener("click", (event) => {
    if (!calculationApplication.querySelector(".application__modal-calculation").contains(event.target)) {
        toggleModal(false, calculationApplication);
    }
});