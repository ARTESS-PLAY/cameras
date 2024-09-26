document.querySelector(".header__menu-btn").addEventListener("click", () => {
    document.querySelector('.body').classList.toggle("body_menu-open")
    document.querySelector(".wrapper").classList.toggle("wrapper_menu-open");
    document.querySelector(".wrapper__menu").classList.toggle("wrapper__menu_open");
    document.querySelector(".header__menu-btn").classList.toggle("header__menu-btn_open");
    document.querySelector(".header__phone-btn").classList.toggle("header__phone-btn_hidden");
})