<div class="container-fluid">
    

<h1>Hasil Pencarian</h1>

<?php if(!empty($produk)) { ?>
    <div class="row">
        <?php foreach($produk as $p) { ?>
            <div class="col-lg-4">
                <div class="card">
                    <img src="<?php echo base_url('uploads/'.$p->gambar); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $p->nama_brg; ?></h5>
                        <p class="card-text">Harga: Rp <?php echo number_format($p->harga, 0, ',', '.'); ?></p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } else { ?>
    <p>Tidak ada produk yang ditemukan.</p>
<?php } ?>

</div>