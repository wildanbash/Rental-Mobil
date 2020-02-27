<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Data Type</h1>
        </div>

        <a href="<?= base_url('admin/data_type/tambah_data_type')?>" class="btn btn-primary mb-3"> <i class="fas fa-plus"></i>  Tambah Data</a>
        <?= $this->session->flashdata('pesan') ?>
        <table class="table table-hover table-striped table-bordered" id="data_table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Type</th>
                    <th>Nama Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no=1;
                    foreach($type as $tp) : ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $tp->kode_type?></td>
                            <td><?= $tp->nama_type?></td>
                            <td>
                                <span class="input-group-append">
                                    <a href="<?= base_url('admin/data_type/delete_type/').$tp->id_type?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    <a href="<?= base_url('admin/data_type/edit_type/').$tp->id_type?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>

        </table>
    </section>
</div>