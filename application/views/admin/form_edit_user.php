<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Tambah Data user</h1>
		</div>

		<div class="card">
			<div class="card-body">

                <?php foreach($user as $us) : ?>

                <form action="<?= base_url('admin/data_user/edit_user_simpan')?>" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" name="id_user" value="<?=$us->id_user?>">
                                <input type="text" name="nama" class="form-control" value="<?= $us->nama?>">
                                <?= form_error('nama','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="<?= $us->email?>">
                                <?= form_error('email','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" >
                                <?= form_error('password','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" >
                                <?= form_error('confirm_password','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $us->alamat?>">
                                <?= form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="gender" class="form-control">
                                    <option value="<?= $us->gender?>"><?= $us->gender?></option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?= form_error('gender','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No. Telepon</label>
                                <input type="text" name="no_telp" class="form-control" value="<?= $us->no_telp?>">
                                <?= form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>No. KTP</label>
                                <input type="text" name="no_ktp" class="form-control" value="<?= $us->no_ktp?>">
                                <?= form_error('no_ktp','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Scan KTP</label>
                                <input type="file" name="scan_ktp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Scan KK</label>
                                <input type="file" name="scan_kk" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control">
                                    <option value="<?= $us->level?>">
                                        <?php if(($us->level) == 1){
                                            echo "Admin";
                                        }else{
                                            echo "Customer";
                                        } ?>
                                        
                                    </option>

                                    <option value="1">Admin</option>
                                    <option value="2">Customer</option>
                                </select>
                                <?= form_error('level','<div class="text-small text-danger">','</div>') ?>
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
