const flashData = $('.flash-data').data('flashdata');
  if (flashData){
    Swal.fire({
        title : 'Data Barang', 
        text : 'Berhasil ' + flashData,
        icon : 'success',
    });
  }
  
///tombol delete 
$('.tombol-delete').on('click', function (e) {
  e.preventDefault();

  const href = $(this).attr('href');

  Swal.fire({
    title: 'Apakah anda yakin?',
    text: "Data baranng akan di hapus",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus Data!'
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    }
  })

});