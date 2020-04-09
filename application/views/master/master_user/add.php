<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">General Form</h4>
						<h6 class="card-subtitle"> All with bootstrap element classies </h6>
						<form class="mt-4" action="<?= base_url('master/master_user_add_data') ?>" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="tes" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="Masukkan Username" name="username">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="Enter email" name="email">
							</div>
							<div class="form-group">
								<select class="select2 js-programmatic form-control" id="programmatic-single"
									style="width: 20%;height: 36px;" name="privillege">
									<optgroup label="Pilih Privillege">
										<option value="3">Supervisor</option>
										<option value="4">Employee</option>
									</optgroup>
								</select>
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
							<button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>