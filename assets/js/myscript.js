const flashData = $('.flash-data').data('flashdata');
  if (flashData){
    Swal.fire({
        title : 'Data Barang Masuk', 
        text : 'Berhasil ' + flashData,
        icon : 'success',
    });
  }