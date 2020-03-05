<div class="container mt-5 mb-5">
    <div class="card bg-light">
        <?php foreach ($detail as $dt) : ?>
        <div class="card-body">
            <div class="row">
                <h3 class="mb-4 ml-3 font-weight-bold"><?= $dt->merk ?></h3>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <img src="<?= base_url('assets/upload/mobil/') . $dt->gambar ?>" height="380px" width="610px">
                </div>
                <div class="col-md-5 mt-2">
                    <form action="<?= base_url('customer/rental/tambah_rental_ready_simpan') ?>" method="POST">
                        <div class="form-group">
                            <label>Tanggal Sewa</label>
                            <input type="hidden" name="id_mobil" value="<?= $dt->id_mobil ?>">
                            <input type="text" name="tgl_sewa" class="form-control picker" onclick="disable()" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="text" name="tgl_kembali" class="form-control picker" onclick="disable()" autocomplete="off"
                                required>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3 float-right"><i
                                class="fa fa-shopping-cart"></i>
                            Checkout</button>


                    </form>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>