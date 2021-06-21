//logout 
$('.tombol-logout').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
        Swal({
                title: 'Apakah anda yakin',
                text: "Ingin Logout",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
              }).then((result) => {
                if (result.value ) {
                  document.location.href = href;
                }
        })

});