<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">General Form</h4>
						<h6 class="card-subtitle"> All with bootstrap element classies </h6>
						<form class="mt-4" action="<?= base_url('master/submaster_tag_add_data') ?>" method="post">
						<input type="hidden" value="<?= $idmasterpos ?>" name="idmasterpos">
							<div class="form-group">
                                <label>Tambah Data Submaster</label>
								<input type="text" class="form-control" placeholder="Masukkan Nama Subtags" name="namasubmaster">
							</div>
							<button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>