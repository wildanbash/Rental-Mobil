<div class="container mt-5 mb-5">
	<div class="card bg-light">
		<h3 class="text-center mt-3">Detail Sewa</h3>
		<div class="card-body">
			<div class="form-group">
				<label>Nama Customer</label>
				<input type="text" class="form-control" autocomplete="off" value="<?= $nama?>">
			</div>
			<div class="form-group">
				<label>Mobil</label>
				<input type="text" class="form-control" autocomplete="off" value="<?= $merk?>">
			</div>
			<div class="form-group">
				<label>Tanggal Sewa</label>
				<input type="text" class="form-control" autocomplete="off" value="<?= $tanggal_sewa ?>">
			</div>
			<div class="form-group">
				<label>Tanggal Kembali</label>
				<input type="text" class="form-control" autocomplete="off" value="<?= $tanggal_kembali ?>">
			</div>
			<div class="form-group">
				<label>Durasi</label>
				<input type="text" class="form-control" autocomplete="off" value="<?= $durasi ?> Hari">
			</div>
			<div class="form-group">
				<label>Total Biaya Sewa</label>
				<input type="text" class="form-control" autocomplete="off" value="<?= indo_currency($total_sewa) ?>">
			</div>
			<b>*Silahkan transfer Total Biaya Sewa ke 123456789 Bank BNI a/n WILDAN DAWAM BASH maksimal tanggal <?= $batas_bayar?>. <br>
			Untuk konfirmasi pesanan silahkan ke halaman Riwayat Sewa</b>
			<br>

			<a href="<?= base_url('customer/rental/riwayat_sewa')?>" class="btn btn-secondary mt-3">Riwayat Sewa</a>


			
		</div>
	
	</div>
</div>

