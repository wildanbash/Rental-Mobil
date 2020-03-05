<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Register</title>

	<link rel="shortcut icon" href="<?= base_url('assets/assets_stisla') ?>/assets/img/logo.ico">

	<!-- General CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?=base_url()?>/assets/assets_stisla/assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>/assets/assets_stisla/assets/css/components.css">
</head>

<body>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div
						class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
						<div class="login-brand">
							<img src="<?=base_url()?>/assets/assets_stisla/assets/img/logo.png" alt="logo" width="100"
								class="shadow-light rounded-circle">
						</div>

						<div class="card card-primary">
							<div class="card-header">
								<h4>Register</h4>
							</div>

							<div class="card-body">
								<form action="<?= base_url('register/tambah_user_simpan_customer')?>" enctype="multipart/form-data" method="POST">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama" class="form-control" required>
                                                <?= form_error('nama','<div class="text-small text-danger">','</div>') ?>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" required>
                                                <?= form_error('email','<div class="text-small text-danger">','</div>') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" required>
                                                <?= form_error('password','<div class="text-small text-danger">','</div>') ?>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="confirm_password" class="form-control" required>
                                                <?= form_error('confirm_password','<div class="text-small text-danger">','</div>') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" class="form-control" required>
                                                <?= form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="gender" class="form-control" required>
                                                    <option value="">-- Pilih Jenis Kelamin</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <?= form_error('gender','<div class="text-small text-danger">','</div>') ?>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label>No. Telepon</label>
												<input type="text" name="no_telp" class="form-control" required>
												<?= form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label>No. KTP</label>
												<input type="text" name="no_ktp" class="form-control" required>
												<?= form_error('no_ktp','<div class="text-small text-danger">','</div>') ?>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label>Scan KTP</label>
												<input type="file" name="scan_ktp" class="form-control" required>
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label>Scan KK</label>
												<input type="file" name="scan_kk" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="agree" class="custom-control-input" id="agree">
											<label class="custom-control-label" for="agree">I agree with the terms and
												conditions</label>
										</div>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block">
											Register
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="simple-footer">
							Copyright &copy; Wildan Dawam Bash 2020
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- General JS Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="<?=base_url()?>/assets/assets_stisla/assets/js/stisla.js"></script>

	<!-- JS Libraies -->
	<script src="../node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
	<script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>

	<!-- Template JS File -->
	<script src="<?=base_url()?>/assets/assets_stisla/assets/js/scripts.js"></script>
	<script src="<?=base_url()?>/assets/assets_stisla/assets/js/custom.js"></script>

	<!-- Page Specific JS File -->
	<script src="<?=base_url()?>/assets/assets_stisla/assets/js/page/auth-register.js"></script>
</body>

</html>
