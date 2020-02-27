<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Edit Data Type</h1>
		</div>

		<div class="card">
			<div class="card-body">

                <?php foreach ($type as $tp) : ?>

                <form action="<?= base_url('admin/data_type/edit_type_simpan')?>" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="id_type" value="<?= $tp->id_type?> ">
                                <label>Kode Type</label>
                                <input type="text" name="kode_type" class="form-control" value="<?=$tp->kode_type?>">
                                <?= form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Nama type</label>
                                <input type="text" name="nama_type" class="form-control" value="<?=$tp->nama_type?>">
                                <?= form_error('nama_type','<div class="text-small text-danger">','</div>') ?>
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
