<div class="container mt-5 mb-5" style="min-height: 65vh">
	<div class="card bg-light" style="width: 400px; margin: auto;">

		<div class="card-body">
			<form action="<?= base_url('customer/rental/konfirmasi_pembayaran_simpan') ?>" enctype="multipart/form-data" method="POST">
                
                    <div class="form-group">
                        <h5 class="mb-3">Upload Bukti Pembayaran</h5>
                        <input type="file" name="bukti_pembayaran" class="form-control">
                        <input type="hidden" name="id_transaksi" value="<?=$id_transaksi?>">
                    </div>
                

				<button type="submit" class="btn btn-primary mt-3 float-right"><i class="fas fa-upload"></i>
					Upload</button>


			</form>
		</div>

	</div>
</div>
