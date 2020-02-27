<div class="container mt-5 mb-5">
    <div class="card bg-light">
        <?php foreach ($detail as $dt) : ?>
        <div class="card-body">
                <div class="row">
                    <h3 class="mb-4 ml-3 font-weight-bold"><?= $dt->merk?></h3>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <img src="<?= base_url('assets/upload/mobil/').$dt->gambar?>" height="380px" width="610px">
                    </div>
                    <div class="col-md-5 mt-2">
                        <table class="table table-striped">
                            <tr>
                                <th>Merk</th>
                                <td><?=$dt->merk ?></td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td><?=$dt->nama_type ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Plat</th>
                                <td><?=$dt->no_plat ?></td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td><?=$dt->warna ?></td>
                            </tr>
                            <tr>
                                <th>Tahun Produksi</th>
                                <td><?=$dt->tahun ?></td>
                            </tr>
                            <tr>
                                <th>Harga Sewa</th>
                                <td><?= indo_currency($dt->harga)?> /hari</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <?php 
                
                                    if($dt->status == "0"){
                                    echo "<span class = 'btn btn-danger' disable>Telah Disewa</span>";
                                    }else{
                                        if(isset($_SESSION['level']) == 2){
                                            echo anchor('customer/rental/tambah_rental/'.$dt->id_mobil, '<button class="btn btn-primary">Sewa</button>');
                                        }else{ ?>
                                            <a href="<?=base_url('auth/login')?>" class="btn btn-primary">Login Untuk Sewa</a>
                                    <?php 
                                        } 
                                        
                                    }
                                        ?>

                                
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
    </div>
</div>

