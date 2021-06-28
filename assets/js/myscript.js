const flashData = $('.flash-data').data('flashdata');
  if (flashData){
    Swal.fire({
        title : 'Data Barang', 
        text : 'Berhasil ' + flashData,
        icon : 'success',
    });
  }
  