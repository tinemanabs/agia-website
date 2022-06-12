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
