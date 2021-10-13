const flashData = $('.flash-data').data('flashdata');
  if (flashData){
    Swal.fire({
        title : 'Data Barang', 
        text : 'Berhasil ' + flashData,
        icon : 'success',
    });
  }

const flashBarang = $('.flashBarang').data('flashBarang');
  if (flashData){
    Swal.fire({
        title : 'Data Warehouse', 
        text : 'Berhasil ' + flashData,
        icon : 'success',
    });
  }

const flashDataPengguna = $('#flash-data-pengguna').data('flashdata');
  if (flashData){
    Swal.fire({
        title : 'Data Pengguna', 
        text : 'Berhasil ' + flashData,
        icon : 'success',
    });
  }

const flashDataDuplicate = $('.flash-data-duplicate').data('flashdata');
  if (flashDataDuplicate){
    Swal.fire({
        title : 'Gagal Menambahkan', 
        text : 'SN Sudah ' + flashDataDuplicate,
        icon : 'error',
    });
  }

$('.tombol-delete').on('click', function (e) {
  e.preventDefault();

  const href = $(this).attr('href');

  Swal.fire({
    title: 'Apakah anda yakin?',
    text: "Data barang akan dihapus",
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