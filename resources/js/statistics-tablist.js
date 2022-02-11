const navItems = document.querySelectorAll('#panels-tablist .nav-item');

navItems?.forEach(navItem => {
    const navLink = navItem.querySelector('.nav-link');

    navItem.querySelector('img')
        .addEventListener('click', () => navLink.click());
    navItem.querySelector('.tab-decoration-bar')
        .addEventListener('click', () => navLink.click());
});
