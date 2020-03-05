<div class="container mt-5 mb-5" style="min-height: 65vh">
    <div class="card bg-light">

        <div class="card-body">
            <h3>Riwayat Sewa</h3>
            <table class="table table-responsive table-striped" id="data_table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Mobil</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Kembali</th>
                        <th>Total Sewa</th>
                        <th>Status Pembayaran</th>
                        <th>Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($transaksi as $ts) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $ts->nama ?></td>
                        <td><?= $ts->merk ?></td>
                        <td><?= $ts->tanggal_sewa ?></td>
                        <td><?= $ts->tanggal_kembali ?></td>
                        <td><?= indo_currency($ts->total_sewa) ?></td>
                        <td>
                            <?php
                                if ($ts->status_pembayaran == 0) {
                                    echo "Menunggu Pembayaran";
                                } elseif ($ts->status_pembayaran == 1) {
                                    echo "Menunggu Konfirmasi Pembayaran";
                                } else {
                                    echo "Sudah Dibayar";
                                }
                                ?>
                        </td>
                        <td>
                            <?php
                                if ($ts->bukti_pembayaran == '') { ?>
                                    <a href="<?= base_url('customer/rental/konfirmasi_pembayaran/').$ts->id_transaksi?>" class="badge badge-success">Konfirmasi Pembayaran</a>
                                <?php } else{?>
                                    <a href="<?=base_url().'assets/upload/bukti_pembayaran/'.$ts->bukti_pembayaran?>"><img width="100px" height="60px" src="<?=base_url().'assets/upload/bukti_pembayaran/'.$ts->bukti_pembayaran?>"></a>
                                <?php } ?>
                                
                        </td>
                        <td></td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>