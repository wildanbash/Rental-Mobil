<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Data Mobil</h1>
        </div>

        <a href="<?= base_url('admin/data_mobil/tambah_mobil')?>" class="btn btn-primary mb-3"> <i class="fas fa-plus"></i>  Tambah Data</a>
        <?= $this->session->flashdata('pesan') ?>
        <table class="table table-hover table-striped table-bordered" id="data_table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Type</th>
                    <th>Merk</th>
                    <th>No. Plat</th>
                    <th>Harga Sewa</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no=1;
                    foreach($mobil as $mb) : ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td>
                                <img width="100px" height="60px" src="<?=base_url().'assets/upload/mobil/'.$mb->gambar?>">
                            </td>
                            <td><?= $mb->kode_type?></td>
                            <td><?= $mb->merk?></td>
                            <td><?= $mb->no_plat?></td>
                            <td><?= indo_currency($mb->harga)?></td>
                            <td><?= $mb->status == 0 ? "<span class='badge badge-danger'>Kosong</span>" : "<span class='badge badge-primary'>Tersedia</span>"?></td>
                            <td>
                                <div class="input-group-append">
                                <a href="<?= base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                <a href="<?= base_url('admin/data_mobil/delete_mobil/').$mb->id_mobil?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                <a href="<?= base_url('admin/data_mobil/edit_mobil/').$mb->id_mobil?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>

        </table>
    </section>
</div>