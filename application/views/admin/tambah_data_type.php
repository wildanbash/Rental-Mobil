<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Tambah Data type</h1>
		</div>

		<div class="card">
			<div class="card-body">
                <form action="<?= base_url('admin/data_type/tambah_type_simpan')?>" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Type</label>
                                <input type="text" name="kode_type" class="form-control">
                                <?= form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Nama Type</label>
                                <input type="text" name="nama_type" class="form-control">
                                <?= form_error('nama_type','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>  Simpan</button>
                    <button type="reset" class="btn btn-danger"><i class="fas fa-trash"></i>  Reset</button>
                </form>
			</div>
		</div>
	</section>
</div>
