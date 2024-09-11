const currentPath = window.location.pathname.split('/').pop();
const links = document.querySelectorAll('.header__link');

links.forEach((link) => {
    const linkPath = link.getAttribute('href');

    if (linkPath === currentPath) {
        link.classList.add('header__link_active');
    }
});