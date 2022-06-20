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

$('#add-news-btn').on('click', function () {
    var title = $('#title').val();
    var body = $('#body').val();
    var date = $('#date').val();
  
    if (title == '' || body == '' || date == '') {
      Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: 'Please fill up the fields!',
        confirmButtonColor: '#2a2f89'
      });
      return false;
    }
  });