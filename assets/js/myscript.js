const flashData = $ ('.flash-data').data('flashdata');
  if (flashData){
    Swal({
        title : 'Data Barang Masuk', 
        text : 'Berhasil' + flashData,
        type : 'success',
    });
  }