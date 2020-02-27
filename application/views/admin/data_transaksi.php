<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Data Transaksi</h1>
        </div>

        <a href="<?= base_url('admin/transaksi/tambah_transaksi')?>" class="btn btn-primary mb-3"> <i class="fas fa-plus"></i>  Tambah Data</a>
        <?= $this->session->flashdata('pesan') ?>
        <table class="table table-hover table-striped table-bordered" id="data_table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>user</th>
                    <th>Mobil</th>
                    <th>Tgl Sewa</th>
                    <th>Tgl Kembali</th>
                    <th>Total Sewa</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no=1;
                    foreach($transaksi as $ts) : ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $ts->nama?></td>
                            <td><?= $ts->merk?></td>
                            <td><?= $ts->tanggal_sewa?></td>
                            <td><?= $ts->tanggal_kembali?></td>
                            <td><?= indo_currency($ts->total_sewa)?></td>
                            <td><?= $ts->status == 1 ? "<span class='badge badge-warning'>Disewa</span>" : "<span class='badge badge-success'>Selesai</span>"?></td>
                            <td>
                                <div class="input-group-append">
                                <a href="<?= base_url('admin/transaksi/delete_transaksi/').$ts->id_transaksi?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                <a href="<?= base_url('admin/transaksi/edit_transaksi/').$ts->id_transaksi?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>

        </table>
    </section>
</div>