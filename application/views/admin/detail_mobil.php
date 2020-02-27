<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Detail Mobil</h1>
        </div>
    </section>

    <?php foreach($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <img class="mt-3" width="500px" src="<?= base_url().'assets/upload/mobil/'.$dt->gambar?>">
                    </div>
                    <div class="col-md-5">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td>Type Mobil</td>
                                <td><?= $dt->nama_type?></td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td><?= $dt->merk ?></td>
                            </tr>
                            <tr>
                                <td>No.Plat</td>
                                <td><?= $dt->no_plat ?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td><?= $dt->warna ?></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><?= $dt->tahun ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php 
                                        if($dt->status == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                    ?>
                                </td>
                            </tr>
                        </table>

                        <a class="btn btn-sm btn-primary ml-4" href="<?= base_url('admin/data_mobil')?>"> <i class="fas fa-reply"></i> Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>