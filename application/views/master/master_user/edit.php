<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">General Form</h4>
						<h6 class="card-subtitle"> All with bootstrap element classies </h6>
						<form class="mt-4" action="<?= base_url('master/master_user_edit_data') ?>" method="post">
							<?php $data = json_decode($master_user_by_id)?>
							<input type="hidden" name="iduser" value="<?= $data->result[0]->iduser ?>">
							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" value="<?= $data->result[0]->nameuser ?>" name="nameuser">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" value="<?= $data->result[0]->emailuser ?>" name="email">
							</div>
							<div class="form-group">
								<select class="select2 js-programmatic form-control" id="programmatic-single"
									style="width: 20%;height: 36px;" name="privillege">
									<optgroup label="Pilih Privillege">
										<?php if($data->result[0]->idprivillege== 3) : ?>
										<option value="3">Supervisor</option>
										<option value="4">Employee</option>
										<?php elseif($data->result[0]->idprivillege== 4) : ?>
										<option value="3">Supervisor</option>
										<option value="4">Employee</option>
										<?php endif;?>
									</optgroup>
								</select>
							</div>
							<div class="form-group">
								<select class="select2 js-programmatic form-control" id="programmatic-single"
									style="width: 20%;height: 36px;" name="shift">
									<optgroup label="Pilih Shift">
										<?php if($data->result[0]->idshift== 6):  ?>
										<option value="6">06.00-14.00</option>
										<option value="7">14.00-22.00</option>
										<option value="8">22.00-06.00</option>
										<?php elseif(($data->result[0]->idprivillege== 7)):?>
										<option value="7">14.00-22.00</option>
										<option value="6">06.00-14.00</option>
										<option value="8">22.00-06.00</option>
										<?php else : ?>
										<option value="8">22.00-06.00</option>
										<option value="6">06.00-14.00</option>
										<option value="7">14.00-22.00</option>
										<?php endif?>
									</optgroup>
								</select>
							</div>
							<button type="submit" class="btn btn-primary" id="submitButton">Edit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
