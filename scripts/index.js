let navbar = document.querySelector('.navbar');

window.onscroll = () => {
    if (window.scrollY) {
        navbar.classList.add('nav-active');
    } else {
        navbar.classList.remove('nav-active');
    }
};


let navbarmobile = document.querySelector('.navbar-mobile');

window.onscroll = () => {
    if (window.scrollY) {
        navbarmobile.classList.add('navbar-mobile-active');
    } else {
        navbarmobile.classList.remove('navbar-mobile-active');
    }
};