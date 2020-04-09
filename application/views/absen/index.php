<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Absensi Karyawan</h4>
						<div class="table-responsive">
						<label for="rangepicker">Pilih Tanggal</label>
						<input type="text" name="rangepicker" id="rangepicker" value="<?= mdate('%m-%d-%Y') ?>" style="margin-bottom:20px" />
						<button id="cari">Cari</button>
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Privillege</th>
										<th>Checkin</th>
										<th>Checkout</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var base_url = '<?= base_url() ?>';
	var date_created = '<?= mdate('%m-%d-%Y') ?>';
</script>
