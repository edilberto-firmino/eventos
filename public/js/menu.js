// JavaScript para mostrar/ocultar o menu recolhível
document.addEventListener('DOMContentLoaded', function () {
    const collapsedMenu = document.querySelector('.collapsed-menu');
    const navbarToggler = document.querySelector('.navbar-toggler');

    navbarToggler.addEventListener('click', function () {
        collapsedMenu.classList.toggle('show');
    });
});
