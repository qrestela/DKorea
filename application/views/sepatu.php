<div class="container-fluid">
    <div class="row text-center">
        <?php foreach($sepatu as $brg):?>
            <div class="card ml-3" style="width: 15rem;">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg?></h5>
                    <small><?php echo $brg->keterangan?></small><br>
                    <span class="badge bagde-pill badge-success mb-3">Rp. <?php echo number_format($brg->harga,  0,',','.') ?> </span><br>
                    <?php echo anchor('dashboard/tambah_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah Keranjang</div>')?>
                    <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-success">Detail</div>')?>
                    
                </div>
                </div>
        <?php endforeach?>
    </div>
</div>