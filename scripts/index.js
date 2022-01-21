let navbar = document.querySelector('.navbar');

window.onscroll = () => {
    if (window.scrollY) {
        navbar.classList.add('nav-active');
    } else {
        navbar.classList.remove('nav-active');
    }
};