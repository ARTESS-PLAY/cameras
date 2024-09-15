const currentPath = window.location.pathname.split('/').slice(2);
const links = document.querySelectorAll('.header__link');

links.forEach((link) => {
    const linkPath = link.getAttribute('href');
    let flag = false;

    currentPath.forEach((path) => {
        if (linkPath.includes(path)) {
            flag = true;
        }
    })

    if (flag) {
        link.classList.add('header__link_active');
    }
});