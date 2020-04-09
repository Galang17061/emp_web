<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">General Form</h4>
						<h6 class="card-subtitle"> All with bootstrap element classies </h6>
						<form class="mt-4" action="<?= base_url('master/master_shift_add_data') ?>" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Shift</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="ex : 00.00 - 06.00" name="nama_shift">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Keterangan</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="ex : Periode Minggu Ke 2" name="keterangan_shift">
							</div>
							<button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>