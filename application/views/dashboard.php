

<div class="container-fluid">
    <!-- Jika ada hasil pencarian -->
    <?php if (!empty($produk)): ?>
        <h4>Hasil Pencarian</h4>
        <br>
        <div class="row text-center">
            <?php foreach ($produk as $item): ?>
                <div class="card ml-3" style="width: 15rem;">
                    <img src="<?php echo base_url().'/uploads/'.$item->gambar ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?php echo $item->nama_brg ?></h5>
                        <small><?php echo $item->keterangan ?></small><br>
                        <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($item->harga, 0, ',', '.') ?></span><br>
                        <?php echo anchor('dashboard/tambah_keranjang/'.$item->id_brg, '<div class="btn btn-sm btn-primary">Tambah Keranjang</div>') ?>
                        <?php echo anchor('dashboard/detail/'.$item->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <!-- Jika tidak ada hasil pencarian -->
    <?php elseif (!empty($error_message)): ?>
        <h4>Hasil Pencarian</h4>
        <p><?php echo $error_message; ?></p> <!-- Tampilkan pesan error -->

    <!-- Jika tidak ada pencarian, tampilkan semua produk -->
    <?php else: ?>
        <h4>Semua Produk</h4>
        <br>
        <div class="row text-center">
            <?php foreach ($barang as $brg): ?>
                <div class="card ml-3" style="width: 15rem;">
                    <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                        <small><?php echo $brg->keterangan ?></small><br>
                        <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></span><br>
                        <?php echo anchor('dashboard/tambah_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah Keranjang</div>') ?>
                        <?php echo anchor('dashboard/detail/'.$brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

    