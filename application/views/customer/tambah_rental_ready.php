<div class="container mt-5 mb-5">
    <div class="card bg-light">
        <?php foreach ($mobil as $mb) : ?>
        <div class="card-body">
            <div class="row">
                <h3 class="mb-4 ml-3 font-weight-bold"><?= $mb->merk ?></h3>
                
            </div>
            <div class="row">
                <div class="col-md-7">
                    <img src="<?= base_url('assets/upload/mobil/') . $mb->gambar ?>" height="380px" width="610px">
                </div>
                <div class="col-md-5 mt-2">
                    <form action="<?= base_url('customer/rental/tambah_rental_simpan/') ?>" method="POST">
                        <div class="form-group">
                            <label>Tanggal Sewa</label>
                            <input type="text" name="tgl_sewa" class="form-control picker" value="<?= $tgl_sewa ?>"
                                autocomplete="off" disabled>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="text" name="tgl_kembali" class="form-control picker" autocomplete="off"
                                value="<?= $tgl_kembali ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Durasi</label>
                            <input type="text" class="form-control" autocomplete="off"
                                value="<?= $durasi . ' Hari' ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Total Biaya Sewa</label>
                            <input type="text" name="total_biaya" class="form-control"
                                value="<?= indo_currency(($mb->harga) * $durasi) ?>" autocomplete="off" disabled>
                        </div>


                        <input type="hidden" value="<?= $this->fungsi->user_login()->id_user ?>" name="id_user"
                            id="id_user">
                        <input type="hidden" value="<?= $this->fungsi->user_login()->nama ?>" name="nama"
                            id="id_user">
                        <input type="hidden" name="nama_mobil" value="<?= $mb->merk?>">
                        <input type="hidden" value="<?= $mb->harga ?>" name="harga" id="harga">
                        <input type="hidden" name="id_mobil" value="<?= $mb->id_mobil ?>">
                        <input type="hidden" name="durasi" value="<?= $durasi ?>">
                        <input type="hidden" name="tanggal_sewa" value="<?= $tgl_sewa ?>">
                        <input type="hidden" name="tanggal_kembali" value="<?= $tgl_kembali ?>">

                        <button type="submit" class="btn btn-primary mt-3 float-right"><i
                                class="fa fa-shopping-cart"></i>
                            Sewa</button>


                    </form>
                </div>
            </div>
        </div>
        <?php endforeach ?>

    </div>
</div>