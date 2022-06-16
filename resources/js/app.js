/*require('./bootstrap'); */

/* ICONS FOR MOBILE NAVBAR TOGGLER */
$(document).ready(function () {
    $('.fa-times').hide();
    let toggle = false;
    $('.navbar-toggler').on('click', function () {
        toggle = !toggle;
        if (toggle == true) {
            $('.fa-times').show();
            $('.fa-bars').hide();
        } else {
            $('.fa-times').hide();
            $('.fa-bars').show();
        }
    })
})

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});
