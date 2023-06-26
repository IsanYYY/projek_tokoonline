<div class="container-fluid">

<div class="card">
  <h5 class="card-header">Detail Produk</h5>
  <div class="card-body">

     <?php   foreach($barang as $brg):?>
    <div class="row">
        <div class="col-md-4">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
        </div>
        <div class="col-md-8">
            <table class="table">
                <tr>
                    <td>Nama Produk</td>
                    <td><Strong><?php echo $brg->nama_brg?></Strong></td>
                </tr>

                <tr>
                    <td>Keterangan</td>
                    <td><Strong><?php echo $brg->keterangan?></Strong></td>
                </tr>

                <tr>
                    <td>Kategori</td>
                    <td><Strong><?php echo $brg->kategori?></Strong></td>
                </tr>

                <tr>
                    <td>Stok</td>
                    <td><Strong><?php echo $brg->stok?></Strong></td>
                </tr>

                <tr>
                    <td>Harga</td>
                    <td><Strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format($brg->harga,0,',','.') ?></div></Strong></td>
                </tr>
            </table>

            <a href="<?= site_url('/dashboard/tambah_ke_keranjang/' . $brg->id_brg) ?>" class="btn btn-sm btn-primary">Tambah ke Keranjang</a>
            <a href="<?= site_url('/dashboard/index/') ?>" class="btn btn-sm btn-danger">Kembali</a>
        </div>

      
    </div>
    <?php   endforeach;?>
  </div>
</div>
</div>