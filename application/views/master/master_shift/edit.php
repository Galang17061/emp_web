<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">General Form</h4>
						<h6 class="card-subtitle"> All with bootstrap element classies </h6>
                        <form class="mt-4" action="<?= base_url('master/master_shift_edit_data') ?>" method="post">
                        <?php $data = json_decode($shift_by_id)?>
                        <input type="hidden" name="idshift" value="<?= $data->result[0]->idshift ?>">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Shift</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" value="<?= $data->result[0]->namashift ?>" name="namashift">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Keterangan</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" value="<?= $data->result[0]->keteranganshift ?>" name="keteranganshift">
							</div>
							<button type="submit" class="btn btn-primary" id="submitButton">Edit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>