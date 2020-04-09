<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">General Form</h4>
						<h6 class="card-subtitle"> All with bootstrap element classies </h6>
						<form class="mt-4" action="<?= base_url('master/submaster_tag_edit_data/') ?>" method="post">
						<input type="hidden" value="<?= $idmaster ?>" name="idmaster">
							<?php $data = json_decode($submaster_pos_by_id)?>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama </label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" value="<?= $data->result[0]->namesubmasterpos ?>"
									name="namesubmasterpos">
							</div>
							<input type="hidden" name="idsubmasterpos" value="<?= $data->result[0]->idsubmasterpos ?>">
							<button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
