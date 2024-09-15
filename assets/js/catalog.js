const path = window.location.pathname.split('/').slice(2);
const lastPath = window.location.pathname.split('/').pop();
const infoLinks = document.querySelectorAll('.info__link');
const breadcrumbsLinks = document.querySelectorAll('.catalog__breadcrumbs-link');

infoLinks.forEach((link) => {
    const linkPath = link.getAttribute('href');
    let flag = false;

    path.forEach((p) => {
        if (linkPath.includes(p)) {
            flag = true;
        }
    })

    if (flag) {
        link.classList.add('info__link_active');
    }
});

breadcrumbsLinks.forEach((link) => {
    const linkPath = link.getAttribute('href');

    if (linkPath === lastPath) {
        link.classList.add('breadcrumbs__link_active');
    }
})