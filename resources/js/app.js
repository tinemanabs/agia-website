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

$('#contactus-btn').on('click', function () {
    let name = $('#name').val();
    let email = $('#email').val();
    let subject = $('#subject').val();
    let message = $('#message').val();

    var mail_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (name == '' || email == '' || subject == '' || message == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error!',
          text: 'Please fill up the fields!',
          confirmButtonColor: '#2a2f89',
        })
          return false;
    } else if (!(email.match(mail_format))) {
        Swal.fire({
          icon: 'error',
          title: 'Error!',
          text: 'Please enter a valid email',
          confirmButtonColor: '#2a2f89',
        })
        return false;
    }
});
