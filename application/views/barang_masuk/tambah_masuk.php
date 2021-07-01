<body>

<!-- sidebar kanan dan kiri-->
    <div class="sidebar_kanan"></div>
    <div class="sidebar_kiri"></div>

   
<!-- layout tambah barang masuk-->
<div id="content-wrapper" class="d-flex flex-column">
    <h1 class="judul text-center mt-5 mb-4">TAMBAH BARANG MASUK</h1>

    <div class="card card_masuk w-50 mt-5 card-body border-danger border-2 m-sm-auto shadow-lg">
        <div class="card-body">
            <form action="<?= base_url('tambah_masuk/tambah_aksi'); ?>" method="post" class="mt-2">
                <table class="m-sm-auto">
                    <tr>
                        <th width="135">Vendor *</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 18px; margin-top: 20px;" type="text" name="vendor" value="<?= set_value('vendor'); ?>">
                        <?= form_error('vendor','<small class="text-danger pl-3">','</small>') ?>
                        </td>    
                    </tr>

                    <tr>
                        <th width="135">WH Asal *</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="whpenerima" value="<?= set_value('whpenerima'); ?>">
                        <?= form_error('whpenerima','<small class="text-danger pl-3">','</small>') ?>     
                        </td>
                    </tr>

                    <tr>
                        <th width="135">SN *</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="sn" value="<?= set_value('sn'); ?>">
                        <?= form_error('sn','<small class="text-danger pl-3">','</small>') ?>
                        </td>
                    </tr>

                    <tr>
                        <th width="135">MAC *</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="mac" value="<?= set_value('mac'); ?>">
                        <?= form_error('mac','<small class="text-danger pl-3">','</small>') ?>     
                        </td>
                    </tr>

                    <tr>
                        <th width="135">Tanggal Masuk *</th>
                        <td style="display: block;"><input style="padding:10px; width:230px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px; margin-top: 20px;" type="date" name="tglmasuk" value="<?= set_value('tglmasuk'); ?>">
                        <?= form_error('tglmasuk','<small class="text-danger pl-3">','</small>') ?>        
                        </td>
                    </tr>

                    <tr>
                        <th width="135">WH Penerima *</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="whpenerima" value="<?= set_value('whpenerima'); ?>">
                        <?= form_error('whpenerima','<small class="text-danger pl-3">','</small>') ?>     
                        </td>
                    </tr>

                    <tr>
                        <th width="135">Jenis *</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="jenis" value="<?= set_value('jenis'); ?>">
                        <?= form_error('jenis','<small class="text-danger pl-3">','</small>') ?>        
                        </td>
                    </tr>

                    <tr>
                        <th width="135">Tipe *</th>
                        <td><input style="padding: 10px; width:370px; height: 30px; border-radius:5px; background: #C0C0C0; border-color: #808080; border: 5px; margin-bottom: 20px;  margin-top: 20px;" type="text" name="tipe" value="<?= set_value('tipe'); ?>">
                        <?= form_error('tipe','<small class="text-danger pl-3">','</small>') ?>        
                        </td>
                    </tr>
                </table>
   
                <div class="btn_base">
                    <a href="<?= base_url('barang_masuk'); ?>" class="btn btn-secondary mt-5 float-left">Kembali</a>
                    <button href="#" type="submit" class="btn btn-danger mt-5 float-right">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


