<div class="container-fluid">

<div class="card">
    <h5 class="card-header text-center">Detail Produk</h5> 
  <div class="card-body">

        <?php foreach ($barang as $brg) : ?>
        <div class="row">
            <div class="col-md-4">
                <img src="<?= base_url().'assets/img/'.$brg->gambar  ?>" class="card-img-top">
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <td>NAMA PRODUK</td>
                        <td><strong><?= $brg->nama_brg ?></strong></td>
                    </tr>
                    <tr>
                        <td>KETERANGAN</td>
                        <td><strong><?= $brg->keterangan ?></strong></td>
                    </tr>
                    <tr>
                        <td>KATEGORI</td>
                        <td><strong><?= $brg->kategori ?></strong></td>
                    </tr>
                    <tr>
                        <td>STOK</td>
                        <td><strong><?= $brg->stok ?></strong></td>
                    </tr>
                    <tr>
                        <td>HARGA</td>
                        <td><strong><div class="btn btn-sm btn-success">Rp. <?= number_format($brg->harga, 0,',','.') ?></div></strong></td>
                    </tr>
                </table>

                <?= anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>'); ?>
                <?= anchor('welcome','<div class="btn btn-sm btn-danger">Kembali</div>'); ?>
            </div>
        </div>
        <?php endforeach; ?>

  </div>
</div>

</div>