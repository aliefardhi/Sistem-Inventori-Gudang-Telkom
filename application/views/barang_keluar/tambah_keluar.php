<body>

<!-- sidebar kanan dan kiri-->
    <div class="sidebar_kanan"></div>
    <div class="sidebar_kiri"></div>

   
<!-- layout tambah barang keluar-->
<div id="content-wrapper" class="d-flex flex-column">
    <h1 class="judul text-center mt-5 mb-4">TAMBAH BARANG KELUAR</h1>

    <div class="card card_masuk w-50 mt-5 card-body border-danger border-2 m-sm-auto shadow-lg">
        <div class="card-body">
            <form action="<?= base_url('tambah_keluar/tambahKeluar_aksi') ?>" method="post" class="mt-2">
                <table class="m-sm-auto">
                    <tr>
                        <th width="135">WH Asal</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 18px; margin-top: 20px;" type="text" name="whasal">
                        <?= form_error('whasal','<small class="text-danger pl-3">','</small>') ?> 
                        </td>    
                    </tr>

                    <tr>
                        <th width="135">SN</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="snkeluar">
                        <?= form_error('snkeluar','<small class="text-danger pl-3">','</small>') ?>
                        </td>
                    </tr>

                    <tr>
                        <th width="135">MAC</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="mackeluar">
                        <?= form_error('mackeluar','<small class="text-danger pl-3">','</small>') ?>
                        </td>       
                    </tr>

                    <tr>
                        <th width="135">Tanggal Kirim</th>
                        <td style="display: block;"><input style="padding:10px; width:230px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px; margin-top: 20px;" type="datetime-local" name="tglkirim">
                        <?= form_error('tglkirim','<small class="text-danger pl-3">','</small>') ?>        
                        </td>     
                    </tr>

                    <tr>
                        <th width="135">WH Tujuan</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="whtujuan">
                        <?= form_error('whtujuan','<small class="text-danger pl-3">','</small>') ?>
                        </td>        
                    </tr>

                    <tr>
                        <th width="135">Jumlah Keluar</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="jumlahkeluar">
                        <?= form_error('jumlahkeluar','<small class="text-danger pl-3">','</small>') ?>
                        </td>
                    </tr>

                    <tr>
                        <th width="135">Jenis</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="jeniskeluar">
                        <?= form_error('jeniskeluar','<small class="text-danger pl-3">','</small>') ?>        
                        </td>
                    </tr>

                    <tr>
                        <th width="135">Tipe</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="tipekeluar">
                        <?= form_error('tipekeluar','<small class="text-danger pl-3">','</small>') ?>
                        </td>        
                    </tr>
                </table>
   
                <div class="btn_base">
                    <a href="<?= base_url('barang_keluar'); ?>" class="btn btn-secondary mt-5 float-left">Kembali</a>
                    <button href="#" type="submit" class="btn btn-danger mt-5 float-right">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


