<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">General Form</h4>
						<h6 class="card-subtitle"> All with bootstrap element classies </h6>
						<form class="mt-4" action="<?= base_url('master/master_tag_add_data') ?>" method="post">
							<div class="form-group">
								<label>Nama Laporan Tags</label>
								<input type="text" class="form-control namapos" placeholder="Masukkan Nama Tags"
									name="namapos">
							</div>
							<div class="form-group">
								<label>Barcode Laporan Tags Anda</label>
								<!-- <input type="number" class="form-control barcodepos" placeholder="Masukkan Barcode Tags" name="barcodepos"> -->
								<div class="d-flex">
									<input type="text" class="form-control mr-3" id="barcodepos" name="barcodepos" readonly
										style="width:10%">
									<button type="button" class="btn btn-primary"
										onclick="master_tag.random(this)" id="generate">Generate</button>
								</div>
							</div>
							<div class="form-group">
								<select class="select2 js-programmatic form-control" id="programmatic-single"
									style="width: 20%;height: 36px;" name="shift">
									<optgroup label="Pilih Shift">
										<?php $data = json_decode($master_shift)?>
										<?php foreach($data->result as $index): ?>
										<option value="<?= $index->idshift ?>">
											<?= $index->namashift ?>
										</option>
										<?php endforeach?>
									</optgroup>
								</select>
							</div>
							<button type="submit" class="btn btn-primary"
								id="submitButton">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var base_url = '<?= base_url() ?>';
</script>
<script src="<?= $extra_script ?>"></script>