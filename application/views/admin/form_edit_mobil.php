<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Edit Data Mobil</h1>
		</div>

		<div class="card">
			<div class="card-body">

                <?php foreach ($mobil as $mb) : ?>

                <form action="<?= base_url('admin/data_mobil/edit_mobil_simpan')?>" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type Mobil</label>
                                <input type="hidden" name="id_mobil" value="<?=$mb->id_mobil?>">
                                <select name="id_type" class="form-control">
                                    <option value="<?=$mb->id_type?>"><?=$mb->nama_type?></option>
                                    <?php foreach($type as $tp) : ?>
                                    <option value="<?= $tp->id_type?>"><?= $tp->nama_type ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('id_type','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" name="merk" class="form-control" value="<?=$mb->merk?>">
                                <?= form_error('merk','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>No. Plat</label>
                                <input type="text" name="no_plat" class="form-control" value="<?=$mb->no_plat?>">
                                <?= form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Warna</label>
                                <input type="text" name="warna" class="form-control" value="<?=$mb->warna?>">
                                <?= form_error('warna','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" name="tahun" class="form-control" value="<?=$mb->tahun?>">
                                <?= form_error('tahun','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" name="harga" class="form-control" value="<?=$mb->harga?>" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option <?php if($mb->status == "1"){echo "selected='selected'";}
                                    echo $mb->status;?> value="1">Tersedia</option>
                                    <option <?php if($mb->status == "0"){echo "selected='selected'";}
                                    echo $mb->status;?> value="0">Kosong</option>
                                </select>
                                <?= form_error('status','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-3">Reset</button>
                        </div>
                    </div>
                </form>
                <?php endforeach ?>
			</div>
		</div>
	</section>
</div>
